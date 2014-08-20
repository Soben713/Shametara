from django.contrib import admin

# Register your models here.
from helpdesk.models import HelpTask, HelperHistory

admin.site.register(HelpTask, admin.ModelAdmin)
admin.site.register(HelperHistory, admin.ModelAdmin)