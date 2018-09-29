<html>
<meta charset=utf-8>
<head>
  <title>Quiz Semideuses de Belém</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<!--versão do cabeçalho para funcionar localmente, para testes
<form name="testeSDB" action=http://localhost/php/resultado.php  method="post"> -->
<!--
Versão do cabeçalho do formulário pra funcionar na internet e não apenas localmente-->
<!--<form name="testeSDB" action="http://richmito.hol.es/resultado.php"  method="post">-->
<form name="testeSDB" action="http://localhost/Teste-SDB/php/resultado2.php"  method="post">

<h1>Questões do Quiz oficial do Semideuses de Belém</h1>
<?php 
// lê o arquivo json
function ler_json($arquivo){
    $data = file_get_contents($arquivo,TRUE);
    $objeto = json_decode($data);
    return $objeto;
}

// consultando o arquivo json e colocando o conteúdo no array
$perguntas = ler_json("strings/perguntas.json");
$respostas = ler_json("strings/respostas.json");

// laço para exibir todas as perguntas no array
for ($i = 0; $i < count($perguntas); $i++) {
    // Título de cada pergunta
    echo "<br><h3>", $respostas[$i]->numero, " - ", $perguntas[$i]->texto , "<br></h3>";
    
    for ($j = 1; $j < count($respostas)+1; $j++) {
        // Laço para exibir as alternativas de cada pergunta
        echo '<input type=radio name="','questao',$i+1,'" value="',$j,'">"',$respostas[$i]->$j,'<br>';

        
        
    }
}

?><br><br>
<input type=submit value="Terminar">
</form>

</body>
</html>