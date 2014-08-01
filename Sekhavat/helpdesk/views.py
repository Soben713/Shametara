from datetime import datetime
from django.http.response import HttpResponse
from django.shortcuts import render
from helpdesk.models import HelpTask
from mainapp.models import Helpee, Helper
import urllib


def get_nearest_rescuer(request):
    pass


def add_help(request):
    task = HelpTask()
    task.latitude = request.POST['latitude']
    task.longitude = request.POST['longitude']
    task.help_date = datetime.now()
    task.is_from_khadem = False
    task.help_price = 0

    helpee = Helpee()
    helpee.machine_model = request.POST['carModel']
    helpee.help_type = request.POST['problem']
    helpee.name = request.POST['rescueName']
    helpee.family = ' '
    helpee.phone = request.POST['phoneNumber']
    helpee.named_address = request.POST['address']
    helpee.save()
    task.helpee = helpee

    #TODO task.helper = Helper.objects....

    task.save()

    params = urllib.urlencode({'lat': task.latitude, 'lng': task.longitude})
    f = urllib.urlopen('http://localhost:4000/?%s' % params)
    f.read()

    return HttpResponse()
