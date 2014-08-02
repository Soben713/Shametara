from django.shortcuts import render

# Create your views here.
from django.views.generic.base import TemplateView, View, ContextMixin
from helpdesk.models import HelpTask
from mainapp.models import Helper, Company


def add_map_context(context):
    helpers = Helper.objects.filter(status=1)
    context['map']={
        'helpers': helpers
    }
    return context


class ShamTaraHomeView(TemplateView):
    template_name = "managers/shamtara/home.html"

    def get_context_data(self, **kwargs):
        add_map_context(kwargs)
        return kwargs


class ShamTaraMapView(TemplateView):
    template_name = "managers/shamtara/report/map.html"

    def get_context_data(self, **kwargs):
        add_map_context(kwargs)
        return kwargs


class ShamTaraHelpTasksView(TemplateView):
    template_name = "managers/shamtara/report/helptask.html"

    def get_context_data(self, **context):
        context['helptasks'] = HelpTask.objects.all()
        s_p_s=0
        for helptask in HelpTask.objects.all():
            s_p_s+= helptask.shametara_poorsant
        context['shametara_poorsant_sum'] = s_p_s
        return context

class ShamTaraSatisfaction(TemplateView):
    template_name = "managers/shamtara/report/satisfaction.html"

    def get_context_data(self, **context):
        from random import randint
        context['companies'] = [{
            'company': company,
            'color_r': randint(0, 255),
            'color_g': randint(0, 255),
            'color_b': randint(0, 255),
        } for company in Company.objects.all()]
        return context

