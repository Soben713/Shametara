from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView
from managers.views import HomeView, MapView, HelpTasksView, Satisfaction, Financial

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^$', HomeView.as_view(), name="shametara_admin_home"),
    url(r'^report/map$', MapView.as_view(), name="shametara_admin_report_map"),
    url(r'^report/financial$', Financial.as_view(), name="shametara_admin_report_financial"),
    url(r'^report/helptasks$', HelpTasksView.as_view(), name="shametara_admin_report_helper"),
    url(r'^report/satisfaction$', Satisfaction.as_view(), name="shametara_admin_report_satisfaction"),
    url(r'^report/uptime$', TemplateView.as_view(template_name='managers/report/uptime.html'), name="company_uptime"),
)
