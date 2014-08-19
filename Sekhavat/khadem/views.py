# -*- coding: utf-8 -*-

# Create your views here.
import sms
from django.http import HttpResponse
from helpdesk.views import help_process_start
from khadem.models import UserComment
from helpdesk.models import HelpTask
from django.views.decorators.csrf import csrf_exempt


@csrf_exempt
def proccess_req(request):
    if request.method == 'GET':
        phone = request.GET['from']
        text = request.GET['text']
        parts = text.split(",")

        if parts[0] == 'h':  # help task request
            while len(parts) < 7:
                parts.append("")
            result = help_process_start(phone,  # phone
                                        parts[1], parts[2],  # lat lng
                                        parts[3],  # problem
                                        parts[4],  # machine
                                        parts[5], parts[6],  # name family
                                        parts[7])  # desc

            if result:
                sms.send_sms(phone, u"عملیات امداد با موفقیت شروع شد")
            else:
                sms.send_sms(phone, u"امدادگر مناسبی برای شما یافت نشد")
        if parts[0].isdigit():
            doCommentDoingThings(parts[0], phone)
        return HttpResponse("OK")
    else:
        return HttpResponse("FAULT")


def endTaskGetComment(helperNum):
    try:
        task = HelpTask.objects.get(helper__phone=helperNum)
        phone = task.helpee.phone
        task.status = 2  # set status to waiting for comment
        task.save()
        sms.send_sms(phone,
                     "به سوالات زیر با اعداد بین ۱-۴ به "
                     "صورت یک عدد پنج رقمی پاسخ دهید\n"
                     "1-دانش کافی امدادگر?\n"
                     "2-رسیدن به موقع?\n"
                     "3-نحوه برخورد امدادگر?\n"
                     "4-لوازم کافی امدادگر?\n"
                     "5-دیگر موارد\n")
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
