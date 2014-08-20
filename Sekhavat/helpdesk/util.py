import json
import urllib
from django.http import HttpResponse
from django.shortcuts import render
from django.utils.datetime_safe import datetime
from django.utils.encoding import smart_str
import math
from helpdesk.models import HelpTask
from mainapp.models import Helpee, Helper

__author__ = 'moreka'


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
            'sender_company_id': -1,
            'options': json.dumps(options)
        })
    f = urllib.urlopen('http://0.0.0.0:4000/?%s' % params)
    r = json.loads(f.read())

    if r['status'] == 1:
        task.helper = Helper.objects.get(id=int(r['helper_id']))
        task.save()
        return 1
    return 0