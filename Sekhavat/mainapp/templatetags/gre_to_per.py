# -*- coding: utf-8 -*-
import jalali
from django import template
import re

register = template.Library()


@register.filter
def gre_to_per(value):
    monthes = ["فردوردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"]
    year, month, day = jalali.Gregorian(value.year, value.month, value.day).persian_tuple()
    return str(day) + " " + monthes[month] + " " + str(year) + " ساعت " + str(value.hour) + ":" + str(value.minute) + ":" + str(value.second)
