import mongoengine as db
from .dbconfig import url
from .models import Perguntas, Gabarito, Usuario

db.connect(host=url)
