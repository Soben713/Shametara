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
        phone = phone.replace("+98", "0")
        text = request.GET['text']
        parts = text.split(" ")

        if parts[0] == 'h':  # help task request
            result = help_process_start(phone,  # phone
                                        parts[1], parts[2],  # lat lng
                                        phone[3],  # problem
                                        phone[4],  # machine
                                        phone[5])  # desc

            if result:
                sms.send_sms(phone, "amaliate emdaade shoma shoroo shod.")
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
        sms.send_sms(phone, "Baa Salam Emdaade Shoma Be Payan Redid\n"
                     "Be Farayand Emdad Az 1-4 che nomreii midahid?\n")
        return True
    except HelpTask.DoesNotExists:
        return False


def doCommentDoingThings(ans, phone):
    try:
        comment = UserComment()
        task = HelpTask.objects.get(helpee__phone=phone, status=2)
        comment.service_rate = int(ans)
        sms.send_sms(phone, "Didgahe Shoma ba movafaghiat sabt shod.")
        comment.save()
        task.user_comment = comment
        task.status = 3  # set status to help finished
        task.save()
    except HelpTask.DoesNotExists:
        pass
    except ValueError:
        sms.send_sms(phone,
                     "peyghame ersali az shoma na motabar bood ba tashkor!")
