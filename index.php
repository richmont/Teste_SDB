<html>
<meta charset=utf-8>
<head>
  <title>Quiz Semideuses de Belém</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<!--versão do cabeçalho para funcionar localmente, para testes
<form name="testeSDB" action=http://localhost/php/resultado.php  method="post"> -->
<!--
Versão do cabeçalho do formulário pra funcionar na internet e não apenas localmente-->
<form name="testeSDB" action="http://richmito.hol.es/resultado.php"  method="post">
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
    echo "<h3>", $respostas[$i]->numero, " - ", $perguntas[$i]->texto , "<br></h3>";
    echo '<BR>A<input type=radio name="','questao',$i+1,'" value=A required>"',$respostas[$i]->A;
    echo '<BR>B<input type=radio name="','questao',$i+1,'" value=B>"',$respostas[$i]->B;
    echo '<BR>C<input type=radio name="','questao',$i+1,'" value=C>"',$respostas[$i]->C;
    echo '<BR>D<input type=radio name="','questao',$i+1,'" value=D>"',$respostas[$i]->D;
    echo '<BR>E<input type=radio name="','questao',$i+1,'" value=E>"',$respostas[$i]->E;
    echo '<BR>F<input type=radio name="','questao',$i+1,'" value=F>"',$respostas[$i]->F;
    echo '<BR>G<input type=radio name="','questao',$i+1,'" value=G>"',$respostas[$i]->G;
    echo '<BR>H<input type=radio name="','questao',$i+1,'" value=H>"',$respostas[$i]->H;
    echo '<BR>I<input type=radio name="','questao',$i+1,'" value=I>"',$respostas[$i]->I;
    echo '<BR>J<input type=radio name="','questao',$i+1,'" value=J>"',$respostas[$i]->J;
    echo '<BR>K<input type=radio name="','questao',$i+1,'" value=K>"',$respostas[$i]->K;

}
?><br><br>
<input type=submit value="Terminar">
</form>

</body>
</html>