import urllib
from django.http import HttpResponse
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
    r = f.read()
    return int(r)