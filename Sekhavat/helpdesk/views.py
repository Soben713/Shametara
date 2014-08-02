from datetime import datetime
from django.contrib.auth import authenticate
from django.http.response import HttpResponse
from django.shortcuts import render
from django.contrib import auth
import math
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

    task.save()

    proposed_helper = find_nearest_helper(task.latitude, task.longitude)

    params = urllib.urlencode(
        {
            'task_id': task.id,
            'lat': task.latitude,
            'lng': task.longitude,
            'helper_id': proposed_helper.id,
            'helper_name': proposed_helper.name + ' ' + proposed_helper.family,
            'company_id': proposed_helper.company.id,
            'company_name': proposed_helper.company.name
        })
    f = urllib.urlopen('http://localhost:4000/?%s' % params)
    f.read()

    return HttpResponse()


def find_nearest_helper(lat, lng):
    helpers = Helper.objects.all()
    nearest = None
    dist = float("inf")
    # compute manhattan distance
    for helper in helpers:
        dist_ = math.fabs(helper.latitude - lat) + math.fabs(helper.longitude - lng)
        if dist_ < dist:
            dist = dist_
            nearest = helper
    return nearest


def help_process_start(a, b, c):
    pass


def update_location(request):
    user = authenticate(username=request.GET['username'], password=request.GET['password'])
    if user is None:
        return None

    helper = Helper.objects.find(username=request.GET['username'])
    helper.latitude = float(request.GET['lat'])
    helper.longitude = float(request.GET['lng'])
    helper.status = int(request.GET['status'])

    helper.save()


def login_helper(request):
    print("get")
    username = request.GET['username']
    password = request.GET['password']
    user = auth.authenticate(username=username, password=password)
    try:
        helper = Helper.objects.get(username=username)
    except Helper.DoesNotExist:
        helper = None
    result = "None"
    print(username)
    print(password)
    if user is not None and helper is not None:
        result = "helper"
        print("logged in")
    else:
        print("wrong user pass")
    return HttpResponse(result)

