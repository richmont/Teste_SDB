from django.contrib import admin
from app_teste_sdb.models.Gabarito import Gabarito, GabaritoResposta
from app_teste_sdb.models.Questionario import Questionario, Pergunta, Resposta
from app_teste_sdb.models.Panteao import Deus, Panteao

# Register your models here.
admin.site.register(Gabarito)
admin.site.register(GabaritoResposta)
admin.site.register(Questionario)
admin.site.register(Pergunta)
admin.site.register(Resposta)
admin.site.register(Deus)
admin.site.register(Panteao)