from rest_framework import serializers
from .models import Panteao, Divindade, Questionario, Pergunta, Resposta, QuestionarioFeito, RespostasQuestionarioFeito

class PanteaoSerializer(serializers.ModelSerializer):
    class Meta:
        model = Panteao
        fields = '__all__'

class DivindadeSerializer(serializers.ModelSerializer):
    class Meta:
        model = Divindade
        fields = '__all__'

class DivindadeSerializerDepth1(serializers.ModelSerializer):
    class Meta:
        model = Divindade
        fields = '__all__'
        depth = 1

class QuestionarioSerializer(serializers.ModelSerializer):
    class Meta:
        model = Questionario
        fields = '__all__'

class PerguntaSerializer(serializers.ModelSerializer):
    class Meta:
        model = Pergunta
        fields = '__all__'

class RespostaSerializer(serializers.ModelSerializer):
    class Meta:
        model = Resposta
        fields = '__all__'

class QuestionarioFeitoSerializer(serializers.ModelSerializer):
    class Meta:
        model = QuestionarioFeito
        fields = '__all__'

class RespostasQuestionarioFeitoSerializer(serializers.ModelSerializer):
    class Meta:
        model = RespostasQuestionarioFeito
        fields = '__all__'