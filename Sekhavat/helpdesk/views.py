# -*- coding: utf-8 -*-

from datetime import datetime
import json
from django.contrib.auth import authenticate
from django.contrib.auth.decorators import login_required
from django.http.response import HttpResponse
from django.shortcuts import render, redirect
from django.contrib import auth
from django.utils.encoding import smart_str
from helpdesk.models import HelpTask, HelperHistory
from helpdesk.util import find_nearest_helpers
from mainapp.models import Helpee, Helper, Operator
from khadem.views import endTaskGetComment
import urllib


@login_required
def add_help(request):
    task = HelpTask()
    task.latitude = float(request.POST['latitude'])
    task.longitude = float(request.POST['longitude'])
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

    company = Operator.objects.filter(id=request.user.id)[0].company

    task.requesting_company = company

    task.save()

    proposed_helpers = find_nearest_helpers(task.latitude, task.longitude)
    print 'proP: '
    print proposed_helpers
    if proposed_helpers is {}:
        return HttpResponse('No one found!')

    options = []

    for key in proposed_helpers:
        options.append({
            'helper_id': proposed_helpers[key].id,
            'helper_name': smart_str(u'\"' + proposed_helpers[key].name + u' ' + proposed_helpers[key].family + u'\"'),
            'company_id': proposed_helpers[key].company.id,
            'company_name': smart_str(u'\"' + proposed_helpers[key].company.name + u'\"')
        })

    params = urllib.urlencode(
        {
            'task_id': task.id,
            'lat': task.latitude,
            'lng': task.longitude,
            'sender_company_id': company.id,
            'sender_company_name': smart_str(company.name),
            'options': json.dumps(options)
        })
    f = urllib.urlopen('http://0.0.0.0:4000/?%s' % params)
    r = json.loads(f.read())

    if r['status'] == 1:
        task.helper = Helper.objects.get(id=int(r['helper_id']))
        task.save()
        return render(request, 'socket.html', {'status': 1})
    else:
        return render(request, 'socket.html', {'status': 0})


def update_location(request):
    user = authenticate(username=request.GET['username'], password=request.GET['password'])

    if user is None:
        return HttpResponse('Authentication error ...')

    helper = Helper.objects.filter(username=request.GET['username'])[0]

    helper.latitude = float(request.GET['lat'])
    helper.longitude = float(request.GET['lng'])

    new_status = int(request.GET['status'])

    if helper.status != new_status:
        hist = HelperHistory()
        hist.helper = helper
        hist.status = new_status
        hist.save()

    helper.status = new_status

    helper.save()

    if helper.status == 1:
        tasks = HelpTask.objects.filter(helper=helper, status=1)
        if len(tasks) > 0:
            helper.status = 3
            helper.save()
            return HttpResponse(('3,%f,%f' % (tasks[0].latitude, tasks[0].longitude)))
    return HttpResponse('0')


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
        result = "helper,"
        result += user.name+","
        result += user.family

        print("logged in")
    else:
        print("wrong user pass")
    return HttpResponse(result)


def help_done(request):
    username = request.GET["username"]
    password = request.GET["password"]
    payment = int(request.GET["payment"])
    user = auth.authenticate(username=username, password=password)
    if user is None:
        return None
    endTaskGetComment(username, payment)
    return HttpResponse("0")


def index(request):
    return render(request, 'socket.html', {"company_id": Operator.objects.filter(id=request.user.id)[0].company.id})
