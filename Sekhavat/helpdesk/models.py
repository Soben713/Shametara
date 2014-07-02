# -*- coding: utf-8 -*-
from django.db import models
from mainapp.models import Helper, Helpee


class HelpTask(models.Model):
    helper = models.ForeignKey(Helper, verbose_name=u'امدادرسان')
    helpee = models.ForeignKey(Helpee, verbose_name=u'کمک خواه')
    help_price = models.IntegerField(verbose_name=u'سود شام‌تارا')
    help_date = models.DateTimeField(auto_now_add=True,
                                     verbose_name=u'تاریخ امدادرسانی')
    longitude = models.IntegerField(verbose_name=u'طول جغرافیایی')
    latitude = models.IntegerField(verbose_name=u'عرض جغرافیایی')

    class Meta:
        verbose_name = u'عمل امداد'
        verbose_name_plural = u'اعمال امداد'
