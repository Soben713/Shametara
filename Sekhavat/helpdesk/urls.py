from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView

import views


admin.autodiscover()

urlpatterns = patterns('',
    url(r'^add-help$', views.add_help),
    url(r'^$', TemplateView.as_view(template_name='socket.html'))
)