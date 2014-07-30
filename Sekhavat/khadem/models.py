# -*- coding: utf-8 -*-
from django.db import models
# Create your models here.


class UserComment(models.Model):
    RATE_TYPES = (
        (1, 'ضعیف'),
        (2, 'متوسط'),
        (3, 'خوب'),
        (4, 'بسیار خوب'),
    )
    behave_rate = models.IntegerField(choices=RATE_TYPES, default=2,
                                      verbose_name=u'نمره‌ی اخلاق',
                                      blank=True, null=True)
    service_rate = models.IntegerField(choices=RATE_TYPES, default=2,
                                       verbose_name=u'نمره‌ی سرویس‌دهی',
                                       blank=True, null=True)
