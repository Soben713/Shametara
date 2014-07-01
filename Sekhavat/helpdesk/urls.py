from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^socket$', TemplateView.as_view(template_name='socket.html'))
)