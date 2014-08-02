from django.contrib import admin

# Register your models here.
from helpdesk.models import HelpTask

admin.site.register(HelpTask, admin.ModelAdmin)