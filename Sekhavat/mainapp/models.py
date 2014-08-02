# -*- coding: utf-8 -*-
from django.db import models
from django.contrib.auth.models import User


class Person(models.Model):
    name = models.CharField(max_length=100, verbose_name=u'نام')
    family = models.CharField(max_length=100, verbose_name=u'نام خانوادگی')
    phone = models.CharField(max_length=100, verbose_name=u'تلفن همراه')

    @property
    def full_name(self):
        return self.name + " " + self.family

    class Meta:
        abstract = True


class ShamManager(Person, User):
    percent = models.IntegerField(verbose_name=u'درصد سود')

    def __unicode__(self):
        return self.name + " " + self.family


class CompanyManager(Person, User):
    company = models.ForeignKey('Company', verbose_name=u'شرکت امداد رسان')

    def __unicode__(self):
        return self.name + " " + self.family

    class Meta:
        verbose_name = u'مدیر'
        verbose_name_plural = u'مدیرها'


class Company(models.Model):
    name = models.CharField(max_length=100, verbose_name=u'نام')

    def _rate(self, field_str):
        sum = 0
        num = 0
        for helper in self.helper_set.all():
            for task in helper.helptask_set.all():
                if task.user_comment is not None:
                    num += 1
                    sum += getattr(task.user_comment, field_str)
        return float(sum)/num

    @property
    def average_other_rate(self):
        return self._rate('other_rate')

    @property
    def average_coming_on_time(self):
        return self._rate('coming_on_time')

    @property
    def average_nahve_barkhord(self):
        return self._rate('nahve_barkhord')

    @property
    def average_lavazem_kafi(self):
        return self._rate('lavazem_kafi')

    @property
    def average_danesh_kafi(self):
        return self._rate('danesh_kafi')

    def __unicode__(self):
        return self.name

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
                                 verbose_name=u'وضعیت', blank=True, null=True)
    company = models.ForeignKey('Company', verbose_name=u'شرکت امدادرسان')
    longitude = models.FloatField(verbose_name=u'طول جغرافیایی',
                                    blank=True, null=True)
    latitude = models.FloatField(verbose_name=u'عرض جغرافیایی',
                                   blank=True, null=True)

    def __unicode__(self):
        return self.name + " " + self.family

    class Meta:
        verbose_name = u'امدادگر'
        verbose_name_plural = u'امدادگران'


class Helpee(Person):
    machine_model = models.CharField(max_length=100, verbose_name=u'مدل خودرو')
    help_type = models.CharField(max_length=100, verbose_name=u'نوع درخواست')
    named_address = models.TextField(max_length=200,
                                     verbose_name=u'آدرس توضیحی',
                                     blank=True, null=True)

    def __unicode__(self):
        return self.name + " " + self.family

    class Meta:
        verbose_name = u'امدادخواه'
        verbose_name_plural = u'امدادخواهان'


class Payment(models.Model):
    company = models.ForeignKey('Company', verbose_name='شرکت امدادرسان')
    value = models.IntegerField(verbose_name=u'مقدار پرداخت')
    pay_date = models.DateTimeField(auto_now_add=True,
                                    verbose_name=u'تاریخ پرداخت')

    def __unicode__(self):
        return self.company.name + ": " + str(self.value)

    class Meta:
        verbose_name = u'پرداخت'
        verbose_name_plural = u'پرداخت‌ها'


class Operator(Person, User):
    company = models.ForeignKey('Company', verbose_name='شرکت امدادرسان')

    def __unicode__(self):
        return self.name + " " + self.family

    class Meta:
        verbose_name = u'اپراتور'
        verbose_name_plural = u'اپراتورها'
