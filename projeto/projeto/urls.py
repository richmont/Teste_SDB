"""
URL configuration for projeto project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from back.views import DivindadeViewSet, PanteaoViewSet, QuestionarioViewSet, PerguntaViewSet, RespostaViewSet, QuestionarioFeitoViewSet, RespostasQuestionarioFeitoViewSet

urlpatterns = [
    path('admin/', admin.site.urls),
    
    path('divindade/', DivindadeViewSet.as_view({'get': 'list', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Lista de Divindades"),
    path('divindade/<int:pk>', DivindadeViewSet.as_view({'get': 'retrieve', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Divindade"),
    
    path('panteao/', PanteaoViewSet.as_view({'get': 'list', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Lista de Panteões"),
    path('panteao/<int:pk>', PanteaoViewSet.as_view({'get': 'retrieve', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Panteao"),

    path('questionario/', QuestionarioViewSet.as_view({'get': 'list', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Lista de Questionários"),
    path('questionario/<int:pk>', QuestionarioViewSet.as_view({'get': 'retrieve', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Questionario"),

    path('pergunta/', PerguntaViewSet.as_view({'get': 'list', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Lista de Perguntas"),
    path('pergunta/<int:pk>', PerguntaViewSet.as_view({'get': 'retrieve', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Pergunta"),

    path('resposta/', RespostaViewSet.as_view({'get': 'list', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Lista de Respostas"),
    path('resposta/<int:pk>', RespostaViewSet.as_view({'get': 'retrieve', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Resposta"),

    path('questionario_feito/', QuestionarioFeitoViewSet.as_view({'get': 'list', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Lista de questionários feitos"),
    path('questionario_feito/<int:pk>', QuestionarioFeitoViewSet.as_view({'get': 'retrieve', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Questionario Feito"),

    path('resposta_questionario_feito/', RespostasQuestionarioFeitoViewSet.as_view({'get': 'list', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Lista de respostas dos questionários feitos"),
    path('resposta_questionario_feito/<int:pk>', RespostasQuestionarioFeitoViewSet.as_view({'get': 'retrieve', 'post': 'create', 'update': 'update', 'delete': 'destroy'}), name="Resposta dos questionários feitos"),
]
