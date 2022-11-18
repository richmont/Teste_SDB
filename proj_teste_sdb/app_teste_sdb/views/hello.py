from django.shortcuts import render, HttpResponse
from django.views.decorators.csrf import csrf_exempt
from django.contrib import messages
import sys, os
sys.path.append(os.getcwd())

@csrf_exempt
def hello(request):
    return HttpResponse('Hello World')