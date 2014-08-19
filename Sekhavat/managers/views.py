from django.http.response import HttpResponse
from django.shortcuts import render

# Create your views here.
from django.views.generic.base import TemplateView, View, ContextMixin
from helpdesk.models import HelpTask
from mainapp.models import Helper, Company, Payment
from mainapp.processors import get_user_role


def add_map_context(request, context):
    user, userrole = get_user_role(request)

    helpers = None
    if userrole == 'admin':
        helpers = Helper.objects.filter(status=1)
    elif userrole == 'manager':
        helpers = Helper.objects.filter(status=1, company=user.company)

    context['map'] = {
        'helpers': helpers
    }
    return context


class HomeView(TemplateView):
    template_name = "managers/home.html"

    def get_context_data(self, **kwargs):
        add_map_context(self.request, kwargs)
        return kwargs


class MapView(TemplateView):
    template_name = "managers/report/map.html"

    def get_context_data(self, **kwargs):
        add_map_context(self.request, kwargs)
        return kwargs


class HelpTasksView(TemplateView):
    template_name = "managers/report/helptask.html"

    def get_context_data(self, **context):
        context['helptasks'] = HelpTask.objects.all()
        s_p_s=0
        for helptask in HelpTask.objects.all():
            s_p_s+= helptask.shametara_poorsant
        context['shametara_poorsant_sum'] = s_p_s
        return context


class Satisfaction(TemplateView):
    template_name = "managers/report/satisfaction.html"

    def get_context_data(self, **context):
        from random import randint
        context['companies'] = [{
            'company': company,
            'color_r': randint(0, 255),
            'color_g': randint(0, 255),
            'color_b': randint(0, 255),
        } for company in Company.objects.all()]
        return context


class Financial(TemplateView):
    template_name = "managers/report/financial.html"

    def get_context_data(self, **context):
        context['payments'] = Payment.objects.all()
        return context