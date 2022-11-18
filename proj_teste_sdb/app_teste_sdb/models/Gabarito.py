from django.db import models
from app_teste_sdb.models.Panteao import Deus

class Gabarito(models.Model):
    id_gabarito = models.IntegerField(unique=True, blank=False, primary_key=True)
    deus = models.ForeignKey(Deus,on_delete=models.CASCADE)

class GabaritoResposta(models.Model):
    id_gabarito_resposta = models.IntegerField(unique=True, blank=False, primary_key=True)
    deus = models.ForeignKey(Deus, on_delete=models.CASCADE)
    gabarito = models.ForeignKey(Gabarito, on_delete=models.CASCADE)
    letra_alternativa = models.CharField(max_length=2, blank=False)
