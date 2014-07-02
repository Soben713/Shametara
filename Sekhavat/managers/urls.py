from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^shametara$', TemplateView.as_view(template_name='managers/shamtara/home.html'), name="shametara_admin_home"),
    url(r'^shametara/report/map$', TemplateView.as_view(template_name='managers/shamtara/report/map.html'),
        name="shametara_admin_report_map"),
    url(r'^shametara/report/financial$', TemplateView.as_view(template_name='managers/shamtara/report/financial.html'),
        name="shametara_admin_report_financial"),
    url(r'^shametara/report/helper$', TemplateView.as_view(template_name='managers/shamtara/report/helper.html'),
        name="shametara_admin_report_helper"),
    url(r'^shametara/report/satisfaction$', TemplateView.as_view(template_name='managers/shamtara/report/satisfaction.html'),
        name="shametara_admin_report_satisfaction"),
    url(r'^shametara/report/satisfaction-khadem$', TemplateView.as_view(template_name='managers/shamtara/report/satisfaction-khadem.html'),
        name="shametara_admin_report_satisfaction_khadem"),

    url(r'^company$', TemplateView.as_view(template_name='managers/company/home.html'), name="company_admin_home"),
    url(r'^company/report/map$', TemplateView.as_view(template_name='managers/company/report/map.html'),
        name="company_admin_report_map"),
    url(r'^company/report/financial$', TemplateView.as_view(template_name='managers/company/report/financial.html'),
        name="company_admin_report_financial"),
    url(r'^company/report/helper$', TemplateView.as_view(template_name='managers/company/report/helper.html'),
        name="company_admin_report_helper"),
    url(r'^company/report/satisfaction$', TemplateView.as_view(template_name='managers/company/report/satisfaction.html'),
        name="company_admin_report_satisfaction"),
    url(r'^company/report/uptime$', TemplateView.as_view(template_name='managers/company/report/uptime.html'),
        name="company_admin_report_uptime"),
)