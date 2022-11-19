from django import forms
from app_teste_sdb.models.Questionario import Questionario, Pergunta, Resposta
from string import ascii_uppercase as letras

class FormQuestionario(forms.Form):
    nome_questionario = forms.CharField(max_length=255, label='Nome do questionário')

class FormPergunta(forms.Form):
    # https://stackoverflow.com/questions/5720287/django-how-to-make-a-form-for-a-models-foreign-keys
    questionario = forms.ModelChoiceField(queryset=Questionario.objects.all())
    texto_pergunta = forms.CharField(max_length=255, label="Texto da pergunta")

class FormResposta(forms.Form):
    questionario = forms.ModelChoiceField(queryset=Questionario.objects.all())
    pergunta = forms.ModelChoiceField(queryset=Pergunta.objects.all())
    texto_resposta = forms.CharField(max_length=255)
    letra_alternativa = forms.ModelChoiceField(queryset=letras)