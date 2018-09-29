<center>
<?php
class Questao{
	public $resposta1 = "";
	public $resposta2 = "";
	public $resposta3 = "";
	public $resposta4 = "";
	public $resposta5 = "";
	public $resposta6 = "";
	public $resposta7 = "";
	public $resposta8 = "";
	public $resposta9 = "";
	public $resposta10 = "";
	public $resposta11 = "";
	public $resposta12 = "";
}

function ler_json($arquivo){
	$data = file_get_contents($arquivo,TRUE);
	$objeto = json_decode($data);
	return $objeto;
}
$gabarito_geral = ler_json("../strings/gabarito.json");
echo $gabarito_geral[0]->resposta[0];

// Cria os objetos
$gabaritoZeus = new Questao();
$gabaritoPoseidon = new Questao();
$gabaritoDemeter = new Questao();
$gabaritoAres = new Questao();
$gabaritoAtena = new Questao();
$gabaritoApolo = new Questao();
$gabaritoHefesto = new Questao();
$gabaritoAfrodite = new Questao();
$gabaritoHermes = new Questao();
$gabaritoDionisio = new Questao();
$gabaritoHades = new Questao();
// coleta as respostas do usuário
$Usuario = new Questao();


// preenche o gabarito


/*
$gabaritoZeus->preencherQuestao($gabaritoZeus,10,4,1,10,6,3,5,2,8,9,7);
$gabaritoPoseidon->preencherQuestao($gabaritoPoseidon,8,10,8,2,4,1,3,5,6,11,9);
$gabaritoDemeter->preencherQuestao($gabaritoDemeter,9,9,7,3,5,2,1,6,10,4,8);
$gabaritoAres->preencherQuestao($gabaritoAres,5,8,5,11,2,4,4,10,7,1,3);
$gabaritoAtena->preencherQuestao($gabaritoAtena,1,5,4,8,9,5,6,7,3,2,11);
$gabaritoApolo->preencherQuestao($gabaritoApolo,4,7,3,9,11,6,2,8,1,5,10);
$gabaritoHefesto->preencherQuestao($gabaritoHefesto,7,11,6,1,3,8,10,11,4,6,2);
$gabaritoAfrodite->preencherQuestao($gabaritoAfrodite,3,1,9,6,10,7,11,9,2,3,5);
$gabaritoHermes->preencherQuestao($gabaritoHermes,6,3,11,5,7,9,8,4,11,10,1);
$gabaritoDionisio->preencherQuestao($gabaritoDionisio,11,2,2,7,8,10,9,1,9,7,4);
$gabaritoHades->preencherQuestao($gabaritoHades,2,6,10,4,1,11,7,3,5,8,6);
*/
// Recebe os valores do formulário e os passa a variáveis

// Recebe os valores das variáveis e passa ao objeto
//$Usuario->preencherQuestao($Usuario,$_POST["questao1"],$_POST["questao2"],$_POST["questao3"],$_POST["questao4"],$_POST["questao5"],$_POST["questao6"],$_POST["questao7"],$_POST["questao8"],$_POST["questao9"],$_POST["questao10"],$_POST["questao11"]);



// comparar o resultado com os gabaritos
function compararQuestoes($questao,$gabarito){
	$deus = 0;

	if($questao->resposta1==$gabarito->resposta1){$deus++;};
	if($questao->resposta2==$gabarito->resposta2){$deus++;};
	if($questao->resposta3==$gabarito->resposta3){$deus++;};
	if($questao->resposta4==$gabarito->resposta4){$deus++;};
	if($questao->resposta5==$gabarito->resposta5){$deus++;};
	if($questao->resposta6==$gabarito->resposta6){$deus++;};
	if($questao->resposta7==$gabarito->resposta7){$deus++;};
	if($questao->resposta8==$gabarito->resposta8){$deus++;};
	if($questao->resposta9==$gabarito->resposta9){$deus++;};
	if($questao->resposta10==$gabarito->resposta10){$deus++;};
	if($questao->resposta11==$gabarito->resposta11){$deus++;};
	return $deus;
}
/*
$zeus = compararQuestoes($Usuario,$gabaritoZeus);
$poseidon = compararQuestoes($Usuario,$gabaritoPoseidon);
$demeter = compararQuestoes($Usuario,$gabaritoDemeter);
$ares = compararQuestoes($Usuario,$gabaritoAres);
$atena = compararQuestoes($Usuario,$gabaritoAtena);
$apolo = compararQuestoes($Usuario,$gabaritoApolo);
$hefesto = compararQuestoes($Usuario,$gabaritoHefesto);
$afrodite = compararQuestoes($Usuario,$gabaritoAfrodite);
$hermes = compararQuestoes($Usuario,$gabaritoHermes);
$dionisio = compararQuestoes($Usuario,$gabaritoDionisio);
$hades = compararQuestoes($Usuario,$gabaritoHades);

echo "Relação de deuses:";
echo nl2br("\nZeus: ").$zeus;
echo nl2br("\nPoseidon: ").$poseidon;
echo nl2br("\nDemeter: ").$demeter;
echo nl2br("\nAres: ").$ares;
echo nl2br("\nAtena ").$atena;
echo nl2br("\nApolo: ").$apolo;
echo nl2br("\nHefesto: ").$hefesto;
echo nl2br("\nAfrodite: ").$afrodite;
echo nl2br("\nHermes: ").$hermes;
echo nl2br("\nDionísio: ").$dionisio;
echo nl2br("\nHades: ").$hades;
*/
?>
<br>
<INPUT TYPE="button" VALUE="Voltar" onClick="history.go(-1);"></INPUT><center>
Versão alpha2.5
