from django.db import models

class Questionario(models.Model):
    id_questionario = models.IntegerField(unique=True, blank=False, primary_key=True)
    nome_questionario = models.CharField(max_length=255, blank=False)

class Pergunta(models.Model):
    id_pergunta = models.IntegerField(unique=True, blank=False, primary_key=True)
    questionario = models.ForeignKey(Questionario, on_delete=models.CASCADE)
    texto_pergunta = models.CharField(max_length=255, blank=False)

class Resposta(models.Model):
    id_resposta = models.IntegerField(unique=True, blank=False, primary_key=True)
    questionario = models.ForeignKey(Questionario, on_delete=models.CASCADE)
    pergunta = models.ForeignKey(Pergunta, on_delete=models.CASCADE)
    texto_resposta = models.CharField(max_length=255, blank=False)
    letra_alternativa = models.CharField(max_length=2, blank=False)