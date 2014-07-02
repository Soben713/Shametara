# -*- coding: utf-8 -*-
from django.db import models
from django.contrib.auth.models import User


class Person(models.Model):
    name = models.CharField(max_length=100, verbose_name=u'نام')
    family = models.CharField(max_length=100, verbose_name=u'نام خانوادگی')
    phone = models.CharField(max_length=100, verbose_name=u'تلفن همراه')

    class Meta:
        abstract = True


class ShamManager(Person, User):
    pass


class CompanyManager(Person, User):
    company = models.ForeignKey('Company', verbose_name=u'شرکت امداد رسان')

    class Meta:
        verbose_name = u'مدیر'
        verbose_name_plural = u'مدیرها'


class Company(models.Model):
    name = models.CharField(max_length=100, verbose_name=u'نام')
    curPrice = models.IntegerField(verbose_name=u'سود فعلی به ازای هر امداد')

    class Meta:
        verbose_name = u'شرکت امدادرسان'
        verbose_name_plural = u'شرکت‌های امدادرسان'


class Helper(Person, User):
    STATUS_TYPES = (
        (1, 'در دسترس'),
        (2, 'دور از دسترس'),
        (3, 'در حال انجام عملیات'),
    )
    status = models.IntegerField(choices=STATUS_TYPES, default=2,
                                 verbose_name=u'وضعیت')
    company = models.ForeignKey('Company', verbose_name=u'شرکت امدادرسان')
    longitude = models.IntegerField(verbose_name=u'طول جغرافیایی')
    latitude = models.IntegerField(verbose_name=u'عرض جغرافیایی')

    class Meta:
        verbose_name = u'امدادگر'
        verbose_name_plural = u'امدادگران'


class Helpee(Person):
    machine_model = models.CharField(max_length=100, verbose_name=u'مدل خودرو')
    help_type = models.CharField(max_length=100, verbose_name=u'نوع درخواست')
    named_address = models.TextField(max_length=200,
                                     verbose_name=u'آدرس توضیحی')

    class Meta:
        verbose_name = u'امدادخواه'
        verbose_name_plural = u'امدادخواهان'


class Payment(models.Model):
    company = models.ForeignKey('Company', verbose_name='شرکت امدادرسان')
    value = models.IntegerField(verbose_name=u'مقدار پرداخت')
    pay_date = models.DateTimeField(auto_now_add=True,
                                    verbose_name=u'تاریخ پرداخت')

    class Meta:
        verbose_name = u'پرداخت'
        verbose_name_plural = u'پرداخت‌ها'
