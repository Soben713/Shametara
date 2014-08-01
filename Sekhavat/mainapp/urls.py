from django.conf.urls import patterns, url
from mainapp.views import add_manager,add_helper,add_operator,login

from django.contrib import admin
from django.views.generic.base import TemplateView


admin.autodiscover()

urlpatterns = patterns('',
    url(r'^addCompany$', TemplateView.as_view(template_name='add_company.html'), name="addCompany"),
    url(r'^addOperator$', TemplateView.as_view(template_name='add_operator.html'), name="addOperator"),
    url(r'^addHelper$', TemplateView.as_view(template_name='add_helper.html'),name="addHelper"),
    url(r'^editInformation', TemplateView.as_view(template_name='edit_information.html'),name="editInformation"),
    url(r'^login$', TemplateView.as_view(template_name='login.html'),name="login"),
    url(r'^addcompany$', add_manager),
    url(r'^addoperator$', add_operator),
    url(r'^addhelper$', add_helper),
    url(r'^doLogin$', login),
    url(r'^$', TemplateView.as_view(template_name='main.html'))

)
