from django.db import models

class Panteao(models.Model):
    nome_panteao = models.CharField("nome_panteao", max_length=200)
    regiao_origem = models.CharField("regiao_origem",max_length=200)

class Divindade(models.Model):
    nome_divindade = models.CharField("nome_divindade", max_length=200)
    panteao = models.ForeignKey(Panteao, on_delete=models.CASCADE)
    divindade_menor = models.BooleanField("divindade_menor")


"""
Modelos que representam as questões a serem respondidas
"""
class Questionario(models.Model):
    titulo_questionario = models.CharField(max_length=200)
    


class Pergunta(models.Model):
    questionario = models.ForeignKey(Questionario, on_delete=models.CASCADE)
    titulo_pergunta = models.CharField(max_length=200)
    


class Resposta(models.Model):
    pergunta = models.ForeignKey(Pergunta, on_delete=models.CASCADE)
    resposta_texto = models.CharField(max_length=200)
    divindade = models.ForeignKey(Divindade, on_delete=models.CASCADE)


"""
Modelos responsáveis pelo registro das respostas
"""
class QuestionarioFeito(models.Model):
    data_criacao = models.DateTimeField("data_criacao")
    nome_usuario = models.CharField("nome_usuario", max_length=200)
    questionario = models.ForeignKey(Questionario, on_delete=models.CASCADE)

class RespostasQuestionarioFeito(models.Model):
    questionario_feito = models.ForeignKey(QuestionarioFeito, on_delete=models.CASCADE)
    pergunta_questionario_feito = models.ForeignKey(Pergunta, on_delete=models.CASCADE)
    resposta_questionario_feito = models.ForeignKey(Resposta, on_delete=models.CASCADE)