# -*- coding: utf-8 -*-
from django.contrib.auth.models import AnonymousUser
from django.http import HttpResponse
from mainapp.models import CompanyManager, Company, Operator, Helper, ShamManager, Payment
from django.shortcuts import redirect, render
from django.contrib import auth,messages
from django.db import IntegrityError
from django.shortcuts import render_to_response
from django.core.context_processors import csrf
from django.views.generic.base import TemplateView, View, ContextMixin


def add_manager(request):
    company = Company()
    company.curPrice = 0
    company.name = request.POST['companyName']
    company.save()
    c = {}
    c.update(csrf(request))

    try:
        manager = CompanyManager.objects.create_user(username=request.POST['userName'],
                                                    password=request.POST['password'],company=company)
    except IntegrityError:
        messages.add_message(request,messages.ERROR,"نام کاربری قبلا استفاده شده است")
        # c["usernameError"] = "نام کاربری قبلا انتخاب شده است"
        # return render_to_response('add_company.html', c
        #                          )
        return render(request,'add_company.html'
                                 )


    # c["success"]="شرکت با موفقیت به سامانه اضافه گردید"
    messages.add_message(request,messages.SUCCESS,"شرکت با موفقیت به سامانه اضافه گردید")
    manager.name = request.POST['managerName']
    manager.family = request.POST['managerFamily']
    manager.phone = request.POST['phoneNumber']


    manager.company = company
    manager.save()
    # return render(request, 'add_company.html', c)
    return render(request, 'add_company.html')

def add_operator(request):
    manager = CompanyManager.objects.get(username=request.user.username)
    c={}
    c.update(csrf(request))
    try:
        operator = Operator.objects.create_user(username=request.POST['userName'],
                                                password=request.POST['password'],company=manager.company)
    except IntegrityError as e:
        print(e)
        # c["usernameError"] = "نام کاربری قبلا انتخاب شده است"
        # return render_to_response('add_operator.html',
        #                         c)
        messages.add_message(request,messages.ERROR,"نام کاربری قبلا استفاده شده است")
        return render(request,'add_operator.html')

    # c["success"]="اپراتور با موفقیت به سامانه اضافه گردید"
    messages.add_message(request,messages.SUCCESS,"اپراتور با موفقیت به سامانه اضافه گردید")
    operator.name = request.POST['operatorName']
    operator.family = request.POST['operatorFamily']
    operator.phone = request.POST['phoneNumber']
    operator.save()
    # return render(request, 'add_operator.html',c)
    return render(request, 'add_operator.html')


def add_helper(request):
    c = {}
    c.update(csrf(request))
    operator = Operator.objects.get(username=request.user.username)
    try:
        helper = Helper.objects.create_user(username=request.POST['userName'],
                                            password=request.POST['password'],company=operator.company)
    except IntegrityError:
        # c["usernameError"] = "نام کاربری قبلا انتخاب شده است"
        # return render_to_response('add_helper.html' , c
        #                           )
        messages.add_message(request,messages.ERROR,"نام کاربری قبلا استفاده شده است")
        return render(request,'add_helper.html')

    # c["success"]="امدادگر با موفقیت به سامانه اضافه گردید"
    messages.add_message(request,messages.SUCCESS,"امدادگر با موفقیت به سامانه اضافه گردید")
    helper.name = request.POST['helperName']
    helper.family = request.POST['helperFamily']
    helper.phone = request.POST['phoneNumber']
    helper.save()
    # return render(request, 'add_helper.html',c)
    return render(request, 'add_helper.html')


def login(request):
    username=request.POST['username']
    passw=request.POST['password']
    exists = True
    user = auth.authenticate(username=username, password=passw)
    try:
        manager =CompanyManager.objects.get(username=username)
    except CompanyManager.DoesNotExist:
        manager = None
    try:
        operator = Operator.objects.get(username=username)
        print(operator)
    except Operator.DoesNotExist:
        operator = None
    try:
        helper = Helper.objects.get(username=username)
        print(helper)
    except Helper.DoesNotExist:
        helper = None
    try:
        shammanager = ShamManager.objects.get(username=username)
        print(shammanager)
    except ShamManager.DoesNotExist:
        shammanager = None
    if user is not None and shammanager is not None:
        auth.login(request, user)
        return HttpResponse("admin")
    elif user is not None and manager is not None:
            company = manager.company
            if company.accepted :
                auth.login(request, user)
                return HttpResponse("manager")
            else :
                messages.add_message(request,messages.WARNING, "نام کاربری شما هنوز به تایید مدیریت شام تارا نرسیده است")
                return HttpResponse("fail")

    elif user is not None and operator is not None:
            auth.login(request, user)
            return HttpResponse("operator")
    elif user is not None and helper is not None:
            print("help")
            auth.login(request, user)
            return HttpResponse("helper")
    #message the user to re enter username and password
    return HttpResponse("None")

def multi_user_checking(request):
    user=request.POST['username']
    try:
        manager = CompanyManager.objects.get(username=user)
    except CompanyManager.DoesNotExist:
        try:
            operator = Operator.objects.get(username=user)
        except Operator.DoesNotExist:
            if user != "admin":
                return HttpResponse("OK")
    return HttpResponse("wrongUserName")


def is_logged_in(request, addr):
        user=request.user
        c={}
        c.update(csrf(request))
        c['denied'] = 1
        if not(user.is_anonymous()):

            username=user.username
            if addr == "addCompany":
                if username != "admin":
                    return render(request, 'login.html',c)
                else:
                    return render(request, 'add_company.html',c)
            else:
                if addr == "addOperator":
                    try:
                        manager=CompanyManager.objects.get(username=username)
                    except CompanyManager.DoesNotExist:
                        return render(request, 'login.html',c)
                    return render(request, 'add_operator.html',c)
                else:
                    if addr == "addHelper":
                         try:
                            operator=Operator.objects.get(username=username)
                         except Operator.DoesNotExist:
                            return render(request, 'login.html',c)
                         return render(request, 'add_helper.html',c)
                    else:
                        if addr == "editInformation":
                            return render(request, 'edit_information.html',c)


        return render(request, "login.html",c)

def log_out(request):
    auth.logout(request)
    return redirect("/")

def password_validity_checking(request):
    user = request.user
    username = user.username
    password = request.POST['password']
    # print(password)
    c={}
    c.update(csrf(request))
    c['succesfullyChanged'] = 0
    c['wrongPassword'] = 0
    usermade = auth.authenticate(username=username, password=password)
    # print(usermade)

    if usermade is None:
        # print("wrong")
        c['wrongPassword'] = 1
        # print(c)
        return HttpResponse("wrong")
    else:
        c['succesfullyChanged'] = 1
        # print(c)
        # print(user.password)

        # print(request.POST['newpassword'])
        user.set_password(request.POST['newpassword'])
        user.save()
        return HttpResponse("success")

def payment_send(request):
    c = {}
    c.update(csrf(request))
    p = Payment()
    p.value = request.POST['pay_val']
    p.company = CompanyManager.objects.get(username=request.user.username).company
    p.save()
    messages.add_message(request,messages.SUCCESS,"با تشکر از پرداخت پول شما")
    return render(request, "pay.html", c)


def send_cooperation_request(request):
        company = Company()
        company.curPrice = 0
        company.name = request.POST['companyName']
        company.save()

        c = {}
        c.update(csrf(request))

        try:
            manager = CompanyManager.objects.create_user(username=request.POST['userName'],
                                                    password=request.POST['password'],company=company)
        except IntegrityError:
            c["usernameError"] = "نام کاربری قبلا انتخاب شده است"
            return render(request,'add_company.html', c
                                 )

        manager.name = request.POST['managerName']
        manager.family = request.POST['managerFamily']
        manager.phone = request.POST['phoneNumber']
        manager.company = company
        manager.save()

        messages.add_message(request,messages.SUCCESS,"درخواست همکاری با موفقیت ارسال شد")
        return render(request ,'apply_for_cooperation.html')

class CompanyRequests(TemplateView):

    template_name = "check_requests.html"
    def get_context_data(self, **context):
        context['pendingCompanies'] = [{
            'manager': x.companymanager_set.all()[0],
            'company': x
        } for x in Company.objects.filter(accepted=False)]

        return context


def acceptNewCompany(request, companyName):
    try:
        company=Company.objects.all().get(name = companyName)
    except:
        return HttpResponse()
    company.accepted = True
    company.save()

    context={}
    context['pendingCompanies'] = [{
        'manager': x.companymanager_set.all()[0],
        'company': x
    } for x in Company.objects.filter(accepted=False)]



    messages.add_message(request,messages.SUCCESS,"شرکت مورد نظر به همکاران شام تارا اضافه گردید")
    return render(request,'check_requests.html',context)
