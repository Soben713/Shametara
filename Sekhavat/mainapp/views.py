# -*- coding: utf-8 -*-
from django.contrib.auth.models import AnonymousUser
from django.http import HttpResponse
from mainapp.models import CompanyManager, Company, Operator, Helper, ShamManager
from django.shortcuts import redirect, render
from django.contrib import auth
from django.db import IntegrityError
from django.shortcuts import render_to_response
from django.core.context_processors import csrf


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
        c["usernameError"] = "نام کاربری قبلا انتخاب شده است"
        return render_to_response('add_company.html', c
                                 )

    c["success"]="اپراتور با موفقیت به سامانه اضافه گردید"
    manager.name = request.POST['managerName']
    manager.family = request.POST['managerFamily']
    manager.phone = request.POST['phoneNumber']


    manager.company = company
    manager.save()
    return render(request, 'add_company.html', c)

def add_operator(request):
    manager = CompanyManager.objects.get(username=request.user.username)
    c={}
    c.update(csrf(request))
    try:
        operator = Operator.objects.create_user(username=request.POST['userName'],
                                                password=request.POST['password'],company=manager.company)
    except IntegrityError as e:
        print(e)
        c["usernameError"] = "نام کاربری قبلا انتخاب شده است"
        return render_to_response('add_operator.html',
                                c)
    c["success"]="اپراتور با موفقیت به سامانه اضافه گردید"
    operator.name = request.POST['operatorName']
    operator.family = request.POST['operatorFamily']
    operator.phone = request.POST['phoneNumber']
    operator.save()
    return render(request, 'add_operator.html',c)



def add_helper(request):
    c = {}
    c.update(csrf(request))
    operator = Operator.objects.get(username=request.user.username)
    try:
        helper = Helper.objects.create_user(username=request.POST['userName'],
                                            password=request.POST['password'],company=operator.company)
    except IntegrityError:
        c["usernameError"] = "نام کاربری قبلا انتخاب شده است"
        return render_to_response('add_helper.html' , c
                                  )
    c["success"]="امدادگر با موفقیت به سامانه اضافه گردید"
    helper.name = request.POST['helperName']
    helper.family = request.POST['helperFamily']
    helper.phone = request.POST['phoneNumber']
    helper.save()
    return render(request, 'add_helper.html',c)

def login(request):
    username=request.POST['username']
    passw=request.POST['password']
    exists=True
    user = auth.authenticate(username=username, password=passw)
    try:
        manager =CompanyManager.objects.get(username=username)
        print("kooni")
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
            auth.login(request, user)
            return HttpResponse("manager")
    elif user is not None and operator is not None:
            print("op")
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
        print("kalle")
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
    return redirect("/login")





