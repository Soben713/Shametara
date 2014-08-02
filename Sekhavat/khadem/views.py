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
        parts = text.split(" ")

        if parts[0] == 'h':  # help task request
            help_process_start(phone, parts[1], parts[2])
        if parts[0].isdigit():
            doCommentDoingThings(parts[0], phone)
        return HttpResponse("OK")
    else:
        return HttpResponse("FAULT")


def endTaskGetComment(helperNum):
    task = HelpTask.objects.get(helper__phone=helperNum)
    phone = task.helpee.phone
    task.status = 2  # set status to waiting for comment
    task.save()
    sms.send_sms(phone, "Baa Salam Emdaade Shoma Be Payan Redid\n"
                 "Be Farayand Emdad Az 1-4 che nomreii midahid?\n")


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
