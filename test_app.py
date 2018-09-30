import os
from unittest import TestCase, main
import mongoengine as db
from db import Perguntas, Gabarito, Usuario

MONGODB_URL = "mongodb://127.0.0.1:27017/Teste-SDB"
MONGODB_NAME = "Teste-SDB"
def cadastrar_pergunta(numero_in,texto_in):
    pergunta = Perguntas(numero=numero_in,texto=texto_in)
    pergunta.save()

def ler_texto_pergunta(self):
    pergunta = Perguntas.objects.get(numero=self)
    return pergunta.texto

def remover pergunta(self):
    pergunta = Perguntas.objects.get(numero=self)
    pergunta.delete()

def redundancia(self):
    # verifica se existe mais de um valor com o mesmo numero
    valor = Perguntas.objects.filter(numero=self)

class TestUsuarios(TestCase):
    def setUp(self):
        #self.db = db.connect(host=os.environ['MONGODB_URL'])
        #print(os.environ['MONGODB_URL'])
        self.db = db.connect(host=MONGODB_URL,username="sdbAdmin",password="password",authentication_source='admin')
        print(MONGODB_URL)

    def test_cadastro_pergunta(self):
        tam_docu = Perguntas.objects.count()
        cadastrar_pergunta(1,'Que tipo de lugar você acha que reflete mais a sua personalidade e te deixaria mais à vontade?')
        tam_docu_novo = Perguntas.objects.count()
        self.assertGreater(tam_docu_novo,tam_docu,"O número de perguntas após o teste é maior que antes")

    def test_ler_texto_pergunta(self):
        texto_pergunta = ler_texto_pergunta(1)
        self.assertEquals(texto_pergunta,'Que tipo de lugar você acha que reflete mais a sua personalidade e te deixaria mais à vontade?',"o texto lido no banco é idêntico ao comparado no teste")

    def test_deletar_pergunta(self):
        remover_pergunta(5)
        #verificar se o numero de perguntas permanece o mesmo


    #def tearDown(self):
        #self.db.drop_database(os.environ['MONGODB_NAME'])
        #self.db.drop_database(MONGODB_NAME)


main()
