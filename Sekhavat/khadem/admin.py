from django.contrib import admin

# Register your models here.
from khadem.models import UserComment

admin.site.register(UserComment, admin.ModelAdmin)