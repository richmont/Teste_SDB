import os
from unittest import TestCase, main
import mongoengine as db
from db import Perguntas, Gabarito, Usuario

MONGODB_URL = "mongodb://127.0.0.1:27017/Teste-SDB"
MONGODB_NAME = "Teste-SDB"
def cadastrar_pergunta(numero_in,texto_in):
    pergunta = Perguntas(numero=numero_in,texto=texto_in)
    pergunta.save()



class TestUsuarios(TestCase):
    def setUp(self):
        #self.db = db.connect(host=os.environ['MONGODB_URL'])
        #print(os.environ['MONGODB_URL'])
        self.db = db.connect(host=MONGODB_URL,username="sdbAdmin",password="password",authentication_source='admin')
        print(MONGODB_URL)

    def test_cadastro_pergunta(self):
        cadastrar_pergunta(1,'Que tipo de lugar você acha que reflete mais a sua personalidade e te deixaria mais à vontade?')
        tam_docu = Perguntas.objects.count()
        self.assertEqual(tam_docu, 1)

    def tearDown(self):
        self.db.drop_database(os.environ['MONGODB_NAME'])
        self.db.drop_database(MONGODB_NAME)

main()
