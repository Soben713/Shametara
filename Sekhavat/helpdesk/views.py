# -*- coding: utf-8 -*-

from datetime import datetime
from django.contrib.auth import authenticate
from django.contrib.auth.decorators import login_required
from django.http.response import HttpResponse
from django.shortcuts import render
from django.contrib import auth
import math
from django.utils.encoding import smart_str
from helpdesk.models import HelpTask
from mainapp.models import Helpee, Helper, Operator
import urllib


def get_nearest_rescuer(request):
    pass


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

    task.save()

    proposed_helpers = find_nearest_helpers(task.latitude, task.longitude)
    print 'proP: '
    print proposed_helpers
    if proposed_helpers is {}:
        return HttpResponse('No one found!')

    helper_ids = []
    helper_names = []
    company_ids = []
    company_names = []

    for key in proposed_helpers:
        helper_ids.append(str(proposed_helpers[key].id))
        helper_names.append(smart_str(u'\"' + proposed_helpers[key].name + u' ' + proposed_helpers[key].family + u'\"'))
        company_ids.append(str(proposed_helpers[key].company.id))
        company_names.append(smart_str(u'\"' + proposed_helpers[key].company.name + u'\"'))

    params = urllib.urlencode(
        {
            'task_id': task.id,
            'lat': task.latitude,
            'lng': task.longitude,
            'helper_ids': ','.join(helper_ids),
            'helper_names': ','.join(helper_names),
            'company_ids': ','.join(company_ids),
            'company_names': ','.join(company_names),
            'sender_company_id': Operator.objects.filter(id=request.user.id)[0].company.id
        })
    f = urllib.urlopen('http://0.0.0.0:4000/?%s' % params)
    f.read()

    return HttpResponse('Found and sent')


def find_nearest_helpers(lat, lng):
    helpers = Helper.objects.all()
    nearest = {}
    dist = {}
    for helper in helpers:
        if helper.status is 1:
            dist_ = math.fabs(helper.latitude - lat) + math.fabs(helper.longitude - lng)
            company_id = helper.company.id
            if not company_id in dist:
                dist[company_id] = float('inf')

            if dist_ < dist[company_id]:
                dist[company_id] = dist_
                nearest[company_id] = helper
    return nearest


def help_process_start(phone, lat, lng, problem, machine, name, family, description):
    print 'SMS: ', phone, lat, lng, problem, machine, name, family

    task = HelpTask()
    task.latitude = float(lat)
    task.longitude = float(lng)
    task.help_date = datetime.now()
    task.is_from_khadem = True
    task.help_price = 0

    helpee = Helpee()
    helpee.machine_model = machine
    helpee.help_type = problem
    helpee.name = name
    helpee.family = family
    helpee.phone = phone
    helpee.named_address = ''
    helpee.save()
    task.helpee = helpee

    task.save()

    proposed_helpers = find_nearest_helpers(task.latitude, task.longitude)
    print 'prop: '
    print proposed_helpers
    if proposed_helpers is {}:
        return HttpResponse('No one found!')

    helper_ids = []
    helper_names = []
    company_ids = []
    company_names = []

    for key in proposed_helpers:
        helper_ids.append(str(proposed_helpers[key].id))
        helper_names.append(smart_str(u'\"' + proposed_helpers[key].name + u' ' + proposed_helpers[key].family + u'\"'))
        company_ids.append(str(proposed_helpers[key].company.id))
        company_names.append(smart_str(u'\"' + proposed_helpers[key].company.name + u'\"'))

    params = urllib.urlencode(
        {
            'task_id': task.id,
            'lat': task.latitude,
            'lng': task.longitude,
            'helper_ids': ','.join(helper_ids),
            'helper_names': ','.join(helper_names),
            'company_ids': ','.join(company_ids),
            'company_names': ','.join(company_names),
            'sender_company_id': -1
        })
    f = urllib.urlopen('http://0.0.0.0:4000/?%s' % params)
    f.read()

    return HttpResponse('Found and sent')


def update_location(request):
    user = authenticate(username=request.GET['username'], password=request.GET['password'])

    if user is None:
        return HttpResponse('Authentication error ...')

    helper = Helper.objects.filter(username=request.GET['username'])[0]

    helper.latitude = float(request.GET['lat'])
    helper.longitude = float(request.GET['lng'])
    helper.status = int(request.GET['status'])

    helper.save()
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
        result = "helper"
        print("logged in")
    else:
        print("wrong user pass")
    return HttpResponse(result)


def index(request):
    return render(request, 'socket.html', {"company_id": 1})  # TODO