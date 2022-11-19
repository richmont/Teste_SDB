from django import forms
from app_teste_sdb.models.Questionario import Questionario, Pergunta, Resposta

class FormQuestionario(forms.ModelForm):
    class Meta:
        model = Questionario
        fields = ['nome_questionario']

class FormPergunta(forms.ModelForm):
    class Meta:
        model = Pergunta
        fields = ['questionario', 'texto_pergunta']
        """
        # https://stackoverflow.com/questions/5720287/django-how-to-make-a-form-for-a-models-foreign-keys
        questionario = forms.ModelChoiceField(queryset=Questionario.objects.all())
        texto_pergunta = forms.CharField(max_length=255, label="Texto da pergunta")
        """

class FormResposta(forms.ModelForm):
    class Meta:
        model = Resposta
        fields = ['questionario', 'pergunta', 'texto_resposta', 'letra_alternativa']
        """
        questionario = forms.ModelChoiceField(queryset=Questionario.objects.all(), label='Questionários disponíveis')
        pergunta = forms.ModelChoiceField(queryset=Pergunta.objects.all(), label='Perguntas disponíveis')
        texto_resposta = forms.CharField(max_length=255, label='Texto da resposta')
        letra_alternativa = forms.CharField(max_length=255, label='Alternativa a ser escolhida pelo usuário')
        """