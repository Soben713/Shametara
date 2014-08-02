from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView
from managers.views import ShamTaraHomeView, ShamTaraMapView, ShamTaraHelpTasksView, ShamTaraSatisfaction, ShamTaraFinancial

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^shametara$', ShamTaraHomeView.as_view(), name="shametara_admin_home"),
    url(r'^shametara/report/map$', ShamTaraMapView.as_view(), name="shametara_admin_report_map"),
    url(r'^shametara/report/financial$', ShamTaraFinancial.as_view(), name="shametara_admin_report_financial"),
    url(r'^shametara/report/helptasks$', ShamTaraHelpTasksView.as_view(), name="shametara_admin_report_helper"),
    url(r'^shametara/report/satisfaction$', ShamTaraSatisfaction.as_view(), name="shametara_admin_report_satisfaction"),

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
