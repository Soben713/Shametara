# -*- coding: utf-8 -*-
from django.contrib import admin
from mainapp.models import Company, Helper, Operator, CompanyManager, Payment, Helpee
from django.contrib.auth.models import User
# from django.contrib.sites.models import Site
from django.contrib.auth.models import Group

# Register your models here.


class CompanyManagerAdmin(admin.ModelAdmin):
    fields = ('name', 'family', 'phone', 'company', 'username', 'password')


class PaymentAdmin(admin.ModelAdmin):
    fields = ('company', 'value')


class HelperAdmin(admin.ModelAdmin):
    fields = ('name', 'family', 'phone', 'company', 'username', 'password', 'latitude', 'longitude', 'status')


class OperatorAdmin(admin.ModelAdmin):
    fields = ('name', 'family', 'phone', 'company', 'username', 'password')

admin.site.unregister(User)
admin.site.unregister(Group)
# admin.site.unregister(Site)

admin.site.register(Company, admin.ModelAdmin)
admin.site.register(Helper, HelperAdmin)
admin.site.register(Helpee, admin.ModelAdmin)
admin.site.register(Operator, OperatorAdmin)
admin.site.register(CompanyManager, CompanyManagerAdmin)
admin.site.register(Payment, PaymentAdmin)
