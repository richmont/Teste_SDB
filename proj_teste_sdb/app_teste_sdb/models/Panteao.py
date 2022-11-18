from django.db import models


class Panteao(models.Model):
    id_panteao = models.IntegerField(unique=True, blank=False, primary_key=True)
    origem = models.CharField(max_length=255, blank=False)
    nome_panteao = models.CharField(max_length=255, blank=False)

class Deus(models.Model):
    id_deus = models.IntegerField(unique=True, blank=False, primary_key=True)
    panteao = models.ForeignKey(Panteao, on_delete=models.CASCADE)
    atribuicao = models.CharField(max_length=50, blank=False)
    deus_nome = models.CharField(max_length=50, blank=False)

