from django.conf.urls import patterns, url

from django.contrib import admin
from django.views.generic.base import TemplateView

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^home$', TemplateView.as_view(template_name='managers/home.html')),
)
