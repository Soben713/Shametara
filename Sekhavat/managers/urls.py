from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView
from managers.views import HomeView, MapView, HelpTasksView, Satisfaction, Financial, SatisfactionKhademOnly, Customers, Uptime

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^$', HomeView.as_view(), name="shametara_admin_home"),
    url(r'^report/map$', MapView.as_view(), name="shametara_admin_report_map"),
    url(r'^report/financial$', Financial.as_view(), name="shametara_admin_report_financial"),
    url(r'^report/helptasks$', HelpTasksView.as_view(), name="shametara_admin_report_helper"),
    url(r'^report/satisfaction$', Satisfaction.as_view(), name="shametara_admin_report_satisfaction"),
    url(r'^report/satisfactionkhadem$', SatisfactionKhademOnly.as_view(), name="shametara_admin_report_satisfaction_khadem_only"),
    url(r'^report/uptime$', Uptime.as_view(), name="company_uptime"),
    url(r'^report/customers', Customers.as_view(), name="company_customers"),
)
