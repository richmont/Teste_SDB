import mongoengine as db
from .dbconfig import url

MONGODB_URL = "mongodb://127.0.0.1:27017/Teste-SDB"
MONGODB_NAME = "Teste-SDB"

#db.connect(host=url)
db.connect(host=MONGODB_URL,username="sdbAdmin",password="password",authentication_source='admin')


# Modelo de pergunta
class Perguntas(db.Document):
    numero = db.IntField(max_length=1, required=True)
    texto = db.StringField(max_length=200, required=True)

class Gabarito(db.Document):
    deus = db.StringField(max_length=20, required=True)
    alternativas = db.ListField(db.StringField(required=True))

class Usuario(db.Document):
    alternativa = db.ListField(db.StringField(max_length=1, required=True))
