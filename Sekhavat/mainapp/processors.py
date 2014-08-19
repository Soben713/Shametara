from django.contrib.auth.models import AnonymousUser
from mainapp.models import CompanyManager, Operator, Helper, ShamManager


def datetime_context_processor(request):
    from datetime import datetime
    return {
        'now': datetime.now(),
        'test':'toh'
    }


#not a processor, is a global utility function
def get_user_role(request):
    user = request.user
    if isinstance(user, AnonymousUser):
        return None, None
    username = user.username

    user_ret = None
    userrole = None

    try:
        user_ret = CompanyManager.objects.get(username=username)
        userrole = 'manager'
    except CompanyManager.DoesNotExist:
        manager = None
    try:
        user_ret = Operator.objects.get(username=username)
        userrole = 'operator'
    except Operator.DoesNotExist:
        operator = None
    try:
        user_ret = Helper.objects.get(username=username)
        userrole = 'helper'
    except Helper.DoesNotExist:
        helper = None
    try:
        user_ret = ShamManager.objects.get(username=username)
        userrole = 'admin'
    except ShamManager.DoesNotExist:
        shammanager = None

    if user_ret == None:
        return (None, None)

    return (user_ret, userrole)


def user_role(request):
    user, userrole = get_user_role(request)
    context = {
        'userrole': userrole,
        'user': user
    }
    return context
