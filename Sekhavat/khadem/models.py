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
    other_rate = models.IntegerField(choices=RATE_TYPES, default=2,
                                       verbose_name=u'دیگر موارد',
                                       blank=True, null=True)
    coming_on_time = models.IntegerField(choices=RATE_TYPES, default=2,
                                       verbose_name=u'رسیدن به موقع',
                                       blank=True, null=True)
    nahve_barkhord = models.IntegerField(choices=RATE_TYPES, default=2,
                                                        verbose_name=u'نحوه‌ی برخورد با مشتری',
                                                        blank=True, null=True)
    lavazem_kafi = models.IntegerField(choices=RATE_TYPES, default=2,
                                       verbose_name=u'لوازم کافی',
                                       blank=True, null=True)
    danesh_kafi = models.IntegerField(choices=RATE_TYPES, default=2,
                                                  verbose_name=u'دانش کافی',
                                                  blank=True, null=True)