from django.conf.urls import patterns, url
from khadem.views import proccess_req
from django.contrib import admin

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^proccess.php$', proccess_req),
)
