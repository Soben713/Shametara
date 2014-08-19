# -*- coding: utf-8 -*-

# Create your views here.
import sms
from django.http import HttpResponse
from helpdesk.util import help_process_start
from khadem.models import UserComment
from helpdesk.models import HelpTask
from django.views.decorators.csrf import csrf_exempt


@csrf_exempt
def proccess_req(request):
    phone = request.POST['from']
    text = request.POST['text'].strip()
    parts = text.split(",")
    print 'Testing ... ', text, parts

    if parts[0] == 'h':  # help task request
        while len(parts) < 7:
            parts.append("")
        result = help_process_start(phone,  # phone
                                    parts[1].strip(), parts[2].strip(),  # lat lng
                                    parts[3].strip(),  # problem
                                    parts[4].strip(),  # machine
                                    parts[5].strip(), parts[6].strip(),  # name family
                                    parts[7].strip())  # desc
        if result == 1:
            sms.send_sms(phone, u"عملیات امداد با موفقیت شروع شد")
        else:
            sms.send_sms(phone, u"امدادگر مناسبی برای شما یافت نشد")
    if parts[0].isdigit():
        doCommentDoingThings(parts[0], phone)
    return HttpResponse("OK")


def endTaskGetComment(username, value):
    try:
        task = HelpTask.objects.get(helper__username=username)
        phone = task.helpee.phone
        task.status = 2  # set status to waiting for comment
        task.help_price = value
        task.save()
        sms.send_sms(phone,
                     "به سوالات زیر با اعداد بین ۱-۴ به "
                     "صورت یک عدد پنج رقمی پاسخ دهید\n"
                     "۱-دانش کافی امدادگر?\n"
                     "۲-رسیدن به موقع?\n"
                     "۳-نحوه برخورد امدادگر?\n"
                     "۴-لوازم کافی امدادگر?\n"
                     "۵-دیگر موارد\n")
        return True
    except HelpTask.DoesNotExists:
        return False


def doCommentDoingThings(ans, phone):
    try:
        comment = UserComment()
        task = HelpTask.objects.get(helpee__phone=phone, status=2)

        comment.coming_on_time = int(ans[0])
        comment.nahve_barkhord = int(ans[1])
        comment.lavazem_kafi = int(ans[2])
        comment.danesh_kafi = int(ans[3])
        comment.other_rate = int(ans[4])

        sms.send_sms(phone, "دیدگاه شما با موفقیت ثبت شد. با تشکر از شما")
        comment.save()
        task.user_comment = comment
        task.status = 3  # set status to help finished
        task.save()
    except HelpTask.DoesNotExists:
        pass
    except ValueError:
        sms.send_sms(phone,
                     "پیغام ارسالی از جانب شما نادرست بود!")
