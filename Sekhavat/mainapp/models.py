# -*- coding: utf-8 -*-
from django.db import models
from django.contrib.auth.models import User


class Person(models.Model):
    name = models.CharField(max_length=100)
    family = models.CharField(max_length=100)
    phone = models.CharField(max_length=100)

    class Meta:
        abstract = True


class HelpPerson (Person):
    longitude = models.IntegerField()
    latitude = models.IntegerField()

    class Meta:
        abstract = True


class Manager(Person, User):
    company = models.ForeignKey('Company')

    class Meta:
        verbose_name = u'مدیر'
        verbose_name_plural = u'مدیرها'


class Company(models.Model):
    name = models.CharField(max_length=100)
    curPrice = models.IntegerField()

    class Meta:
        verbose_name = u'شرکت امدادرسان'
        verbose_name_plural = u'شرکت‌های امدادرسان'


class Helper(HelpPerson, User):
    STATUS_TYPES = (
        (1, 'در دسترس'),
        (2, 'دور از دسترس'),
        (3, 'در حال انجام عملیات'),
    )
    status = models.IntegerField(choices=STATUS_TYPES, default=2)
    company = models.ForeignKey('Company')

    class Meta:
        verbose_name = u'امدادگر'
        verbose_name_plural = u'امدادگران'


class Helpee(HelpPerson):
    machine_model = models.CharField(max_length=100)
    help_type = models.CharField(max_length=100)
    named_address = models.CharField(max_length=200)

    class Meta:
        verbose_name = u'امدادخواه'
        verbose_name_plural = u'امدادخواهان'


class Payment(models.Model):
    company = models.ForeignKey('Company')
    value = models.IntegerField()

    class Meta:
        verbose_name = u'پرداخت'
        verbose_name_plural = u'پرداخت‌ها'
