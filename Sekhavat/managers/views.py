from django.http.response import HttpResponse
from django.shortcuts import render

# Create your views here.
from django.views.generic.base import TemplateView, View, ContextMixin
from helpdesk.models import HelpTask, HelperHistory
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
        user, userrole = get_user_role(self.request)
        if userrole == 'admin':
            context['helptasks'] = HelpTask.objects.all()
        elif userrole == 'manager':
            context['helptasks'] = HelpTask.objects.filter(helper__company=user.company)
        s_p_s=0
        for helptask in HelpTask.objects.all():
            s_p_s+= helptask.shametara_poorsant
        context['shametara_poorsant_sum'] = s_p_s
        return context


class Satisfaction(TemplateView):
    template_name = "managers/report/satisfaction.html"
    khadem_only = False

    def get_context_data(self, **context):
        from random import randint
        context['companies'] = [{
            'company': company,
            'color_r': randint(0, 255),
            'color_g': randint(0, 255),
            'color_b': randint(0, 255),
            'average_coming_on_time': company.average_coming_on_time(self.khadem_only),
            'average_nahve_barkhord': company.average_nahve_barkhord(self.khadem_only),
            'average_lavazem_kafi': company.average_lavazem_kafi(self.khadem_only),
            'average_danesh_kafi': company.average_danesh_kafi(self.khadem_only),
            'average_other_rate': company.average_other_rate(self.khadem_only),
        } for company in Company.objects.all()]
        return context


class SatisfactionKhademOnly(Satisfaction):
    khadem_only = True


class Financial(TemplateView):
    template_name = "managers/report/financial.html"

    def get_context_data(self, **context):
        user, userrole = get_user_role(self.request)
        if userrole == 'admin':
            context['payments'] = Payment.objects.all()
            context['companies'] = Company.objects.all()
        elif userrole == 'manager':
            context['payments'] = Payment.objects.filter(company=user.company)
            context['company'] = user.company
        return context


class Customers(TemplateView):
    template_name = "managers/report/customers.html"

    def get_context_data(self, **context):
        user, userrole = get_user_role(self.request)
        context['helptasks'] = HelpTask.objects.filter(requesting_company=user.company)
        return context


class Uptime(TemplateView):
    template_name = "managers/report/uptime.html"

    def get_context_data(self, **context):
        user, userrole = get_user_role(self.request)
        context['history'] = [{
            'item': item,
            'status': Helper.STATUS_TYPES[item.status - 1][1]
        } for item in HelperHistory.objects.filter(helper__company=user.company)]
        return context