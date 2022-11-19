from django.shortcuts import render, HttpResponse
from django.forms import ValidationError
from django.views.decorators.csrf import csrf_exempt
from django.contrib import messages
from app_teste_sdb.forms.FormsQuestionario import FormQuestionario
import sys, os
sys.path.append(os.getcwd())



@csrf_exempt
def questionario(request):
    form_questionario = FormQuestionario()
    if request.method == 'POST':
        questionario = FormQuestionario(request.POST)
        if questionario.is_valid():
            try:
                questionario.full_clean()
                questionario.save()
                messages.add_message(request, messages.INFO, f"Questionário {request.POST['nome_questionario']} inserido com sucesso")
                return render(request, 'questionario.html', {'form_questionario': form_questionario})            
            except ValidationError as ex:
                for x in ex:
                    messages.add_message(request, messages.ERROR, f"Campo: {x[0]} Erro: {x[1][0]}")


    
    return render(request, 'questionario.html', {'form_questionario': form_questionario})