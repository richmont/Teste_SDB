
from rest_framework import viewsets
from django.shortcuts import get_object_or_404
from rest_framework.response import Response
from .models import Panteao, Divindade, Questionario, Pergunta, Resposta, QuestionarioFeito, RespostasQuestionarioFeito
from .serializers import PanteaoSerializer, DivindadeSerializer, DivindadeSerializerDepth1, QuestionarioSerializer, PerguntaSerializer, RespostaSerializer, QuestionarioFeitoSerializer, RespostasQuestionarioFeitoSerializer
from .serializers import DivindadeSerializerDepth1, QuestionarioSerializerDepth1, PerguntaSerializerDepth1, RespostasQuestionarioFeitoSerializerDepth1, QuestionarioFeitoSerializerDepth1

class PanteaoViewSet(viewsets.ModelViewSet):
    queryset = Panteao.objects.all()
    serializer_class = PanteaoSerializer

class DivindadeViewSet(viewsets.ModelViewSet):
    queryset = Divindade.objects.all()
    serializer_class = DivindadeSerializer
    """
    Listagem de objetos usa um serializer com parâmetro depth = 1
    para exibir informação completa da foreignkey Panteao
    """
    def list(self, request, *args, **kwargs):
        queryset = Divindade.objects.all()
        serializer = DivindadeSerializerDepth1(queryset, many=True)
        return Response(serializer.data)

class QuestionarioViewSet(viewsets.ModelViewSet):
    queryset = Questionario.objects.all()
    serializer_class = QuestionarioSerializer

    def list(self, request, *args, **kwargs):
        queryset = Questionario.objects.all()
        serializer = QuestionarioSerializerDepth1(queryset, many=True)
        return Response(serializer.data)

class PerguntaViewSet(viewsets.ModelViewSet):
    queryset = Pergunta.objects.all()
    serializer_class = PerguntaSerializer

    def list(self, request, *args, **kwargs):
        queryset = Pergunta.objects.all()
        serializer = PerguntaSerializerDepth1(queryset, many=True)
        return Response(serializer.data)

class RespostaViewSet(viewsets.ModelViewSet):
    queryset = Resposta.objects.all()
    serializer_class = RespostaSerializer

class QuestionarioFeitoViewSet(viewsets.ModelViewSet):
    queryset = QuestionarioFeito.objects.all()
    serializer_class = QuestionarioFeitoSerializer

    def list(self, request, *args, **kwargs):
        queryset = QuestionarioFeito.objects.all()
        serializer = QuestionarioFeitoSerializerDepth1(queryset, many=True)
        return Response(serializer.data)

class RespostasQuestionarioFeitoViewSet(viewsets.ModelViewSet):
    queryset = RespostasQuestionarioFeito.objects.all()
    serializer_class = RespostasQuestionarioFeitoSerializer

    def list(self, request, *args, **kwargs):
        queryset = RespostasQuestionarioFeito.objects.all()
        serializer = RespostasQuestionarioFeitoSerializerDepth1(queryset, many=True)
        return Response(serializer.data)