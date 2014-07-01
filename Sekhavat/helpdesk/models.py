from django.db import models


class HelpTask(models.Model):
    helper = models.ForeignKey('Helper')
    helpee = models.ForeignKey('Helpee')
    help_price = models.IntegerField()
    date = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = u'عمل امداد'
        verbose_name_plural = u'اعمال امداد'
