# Generated by Django 4.2.5 on 2023-09-15 00:19

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Divindade',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nome_divindade', models.CharField(max_length=200, verbose_name='nome_divindade')),
                ('divindade_menor', models.BooleanField(verbose_name='divindade_menor')),
            ],
        ),
        migrations.CreateModel(
            name='Panteao',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nome_panteao', models.CharField(max_length=200, verbose_name='nome_panteao')),
                ('regiao_origem', models.CharField(max_length=200, verbose_name='regiao_origem')),
            ],
        ),
        migrations.CreateModel(
            name='Pergunta',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo_pergunta', models.CharField(max_length=200)),
            ],
        ),
        migrations.CreateModel(
            name='Questionario',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo_questionario', models.CharField(max_length=200)),
            ],
        ),
        migrations.CreateModel(
            name='QuestionarioFeito',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('data_criacao', models.DateTimeField(verbose_name='data_criacao')),
                ('nome_usuario', models.CharField(max_length=200, verbose_name='nome_usuario')),
                ('questionario', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='back.questionario')),
            ],
        ),
        migrations.CreateModel(
            name='Resposta',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('resposta_texto', models.CharField(max_length=200)),
                ('divindade', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='back.divindade')),
                ('pergunta', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='back.pergunta')),
            ],
        ),
        migrations.CreateModel(
            name='RespostasQuestionarioFeito',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('pergunta_questionario_feito', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='back.pergunta')),
                ('questionario_feito', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='back.questionariofeito')),
                ('resposta_questionario_feito', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='back.resposta')),
            ],
        ),
        migrations.AddField(
            model_name='pergunta',
            name='questionario',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='back.questionario'),
        ),
        migrations.AddField(
            model_name='divindade',
            name='panteao',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='back.panteao'),
        ),
    ]