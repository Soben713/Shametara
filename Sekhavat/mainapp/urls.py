from django.conf.urls import patterns, url

from django.contrib import admin
from django.views.generic.base import TemplateView

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^login$', TemplateView.as_view(template_name='login.html')),
    url(r'^main$', TemplateView.as_view(template_name='main.html'))
)