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
            while len(parts) < 6:
                parts.append("")
            result = help_process_start(phone,  # phone
                                        parts[1], parts[2],  # lat lng
                                        parts[3],  # problem
                                        parts[4],  # machine
                                        parts[6], parts[7]  # name family
                                        parts[8]) # desc

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
        sms.send_sms(phone,
                     "Be Soalate Zir ba yek adad beyne 1-4 be "
                     "soorate yek adad 5 raghami pasokh dahid\n"
                     "1-daneshe kafie emdadgar?\n"
                     "2-residan be moghe?\n"
                     "3-nahve barkhord emdadgar?\n"
                     "4-lavazem kafi emdadgar?\n"
                     "5-digar mavared\n")
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
