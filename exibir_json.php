<?php 


// lê o arquivo json
function ler_json($arquivo){
    $data = file_get_contents($arquivo,TRUE);
    $objeto = json_decode($data);
    
    return $objeto;

}
// consultando o arquivo json e colocando o conteúdo no array
$perguntas = ler_json("strings/perguntas.json");

// laço para exibir todas as perguntas no array
for ($i = 0; $i < 11; $i++) {
    echo $i+1, " - ", $perguntas[$i]->texto , "<br>";
}
    

?>
