from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^home/shametara$', TemplateView.as_view(template_name='managers/shamtara/home.html'), name="shametara_admin_home"),
    url(r'^home/shametara/report/map$', TemplateView.as_view(template_name='managers/shamtara/report/map.html'),
        name="shametara_admin_report_map"),
    url(r'^home/shametara/report/financial$', TemplateView.as_view(template_name='managers/shamtara/report/financial.html'),
        name="shametara_admin_report_financial"),
    url(r'^home/shametara/report/helper$', TemplateView.as_view(template_name='managers/shamtara/report/helper.html'),
        name="shametara_admin_report_helper"),
    url(r'^home/shametara/report/satisfaction$', TemplateView.as_view(template_name='managers/shamtara/report/satisfaction.html'),
        name="shametara_admin_report_satisfaction"),
    url(r'^home/shametara/report/satisfaction-khadem$', TemplateView.as_view(template_name='managers/shamtara/report/satisfaction-khadem.html'),
        name="shametara_admin_report_satisfaction_khadem"),

    url(r'^home/company$', TemplateView.as_view(template_name='managers/company/home.html'), name="company_admin_home"),
    url(r'^home/company/report/map$', TemplateView.as_view(template_name='managers/company/report/map.html'),
        name="company_admin_report_map"),
    url(r'^home/company/report/financial$', TemplateView.as_view(template_name='managers/company/report/financial.html'),
        name="company_admin_report_financial"),
    url(r'^home/company/report/helper$', TemplateView.as_view(template_name='managers/company/report/helper.html'),
        name="company_admin_report_helper"),
    url(r'^home/company/report/satisfaction$', TemplateView.as_view(template_name='managers/company/report/satisfaction.html'),
        name="company_admin_report_satisfaction"),
    url(r'^home/company/report/uptime$', TemplateView.as_view(template_name='managers/company/report/uptime.html'),
        name="company_admin_report_uptime"),
)