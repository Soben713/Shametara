# -*- coding: utf-8 -*-
from django.db import models
from mainapp.models import Helper, Helpee, ShamManager, Company
from khadem.models import UserComment


class HelpTask(models.Model):
    helper = models.ForeignKey(Helper, verbose_name=u'امدادرسان', null=True)
    helpee = models.ForeignKey(Helpee, verbose_name=u'کمک خواه', null=True)
    help_price = models.IntegerField(verbose_name=u'سود شام‌تارا', null=True)
    help_date = models.DateTimeField(auto_now_add=True,
                                     verbose_name=u'تاریخ امدادرسانی')
    longitude = models.FloatField(verbose_name=u'طول جغرافیایی')
    latitude = models.FloatField(verbose_name=u'عرض جغرافیایی')
    is_from_khadem = models.BooleanField(verbose_name=
                                         u'آیا این درخواست از سمت خادم است')
    requesting_company = models.ForeignKey(Company, verbose_name=u'شرکت درخواست‌دهنده', null=True)

    user_comment = models.ForeignKey(UserComment, verbose_name=u'رضایت سنجی', null=True)
    STATUS_TYPES = (
        (1, 'وارد شده'),
        (2, 'ارسال رضایت'),
        (3, 'اتمام'),
    )
    status = models.IntegerField(choices=STATUS_TYPES, default=1,
                                 verbose_name=u'وضعیت امداد', null=True)
    @property
    def shametara_poorsant(self):
        return float(ShamManager.objects.all()[0].percent) * self.help_price / 100
        # return 1.3

    class Meta:
        verbose_name = u'عمل امداد'
        verbose_name_plural = u'اعمال امداد'


class HelperHistory(models.Model):
    helper = models.ForeignKey(Helper)
    date = models.DateTimeField(auto_now=True)
    status = models.IntegerField(choices=Helper.STATUS_TYPES, default=1)
