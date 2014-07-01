from django.conf.urls import patterns, include, url

from django.contrib import admin
from django.views.generic.base import TemplateView


from django.conf import settings
from django.conf.urls.static import static


admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'Sekhavat.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),
    url(r'^home$', TemplateView.as_view(template_name='layout.html')),
    url(r'^helpdesk/', include('helpdesk.urls')),
    url(r'^managers/', include('managers.urls')),
) + static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)
