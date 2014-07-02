from django.shortcuts import redirect
from django.http import HttpResponse


def login(request):
    username = request.POST['username']

    if username == "admin":
        return HttpResponse("/managers/shametara")

    if username == "company":
        return HttpResponse("/managers/company")

    if username == "operator":
        return HttpResponse("/helpdesk/")
