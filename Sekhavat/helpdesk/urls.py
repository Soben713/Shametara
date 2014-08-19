from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView

import views


admin.autodiscover()

urlpatterns = patterns('',
    url(r'^add-help$', views.add_help),
    url(r'^update-location$', views.update_location),
    url(r'^login-helper$', views.login_helper),
    url(r'^$', views.index),
    url(r'^helpdone/', views.help_done ),
)