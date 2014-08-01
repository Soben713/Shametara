from django.http import HttpResponse
from mainapp.models import CompanyManager, Company, Operator, Helper
from django.shortcuts import redirect
from django.contrib import auth

def add_manager(request):
    company = Company()
    company.curPrice = 0
    company.name = request.POST['companyName']
    company.save()

    manager = CompanyManager.objects.create_user(username=request.POST['userName'],
                                                 password=request.POST['password'],company=company)
    manager.name = request.POST['managerName']
    manager.family = request.POST['managerFamily']
    manager.phone = request.POST['phoneNumber']


    manager.company = company
    manager.save()
    return HttpResponse()

def add_operator(request):
    manager = CompanyManager.objects.get(username=request.user.username)
    operator = Operator.objects.create_user(username=request.POST['userName'],
                                            password=request.POST['password'],company=manager.company)
    operator.name = request.POST['operatorName']
    operator.family = request.POST['operatorFamily']
    operator.phone = request.POST['phoneNumber']
    operator.save()
    return HttpResponse()



def add_helper(request):
    helper = Helper()
    helper.name = request.POST['helperName']
    helper.family = request.POST['helperFamily']
    helper.phone = request.POST['phoneNumber']
    helper.username = request.POST['userName']
    helper.password = request.POST['password']
    helper.save()
    return HttpResponse()

def login(request):
    username=request.POST['username']
    passw=request.POST['password']
    exists=True
    user = auth.authenticate(username=username, password=passw)
    try:
        manager =CompanyManager.objects.get(username=username)
    except CompanyManager.DoesNotExist:
        manager = None
        try:
            operator = Operator.objects.get(username=username)
        except Operator.DoesNotExist:
            operator = None
    if user is not None and username == "admin":
        auth.login(request, user)
        return HttpResponse("admin")

    if user is not None and manager is not None:
        auth.login(request, user)
        return HttpResponse("manager")
    else:
        if user is not None and operator is not None:
            auth.login(request, user)
            return HttpResponse("operator")
    #message the user to re enter username and password
    return HttpResponse("None")


