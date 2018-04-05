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

	function preencherQuestao($questao,$gabarito1,$gabarito2,$gabarito3,$gabarito4,$gabarito5,$gabarito6,$gabarito7,$gabarito8,$gabarito9,$gabarito10,$gabarito11){
		$questao->resposta1 = "$gabarito1";
		$questao->resposta2 = "$gabarito2";
		$questao->resposta3 = "$gabarito3";
		$questao->resposta4 = "$gabarito4";
		$questao->resposta5 = "$gabarito5";
		$questao->resposta6 = "$gabarito6";
		$questao->resposta7 = "$gabarito7";
		$questao->resposta8 = "$gabarito8";
		$questao->resposta9 = "$gabarito9";
		$questao->resposta10 = "$gabarito10";
		$questao->resposta11 = "$gabarito11";

	}





}

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
$gabaritoZeus->preencherQuestao($gabaritoZeus,"J","D","A","J","F","C","E","B","H","I","G");
$gabaritoPoseidon->preencherQuestao($gabaritoPoseidon,"H","J","H","B","D","A","C","E","F","K","I");
$gabaritoDemeter->preencherQuestao($gabaritoDemeter,"I","I","G","C","E","B","A","F","J","D","H");
$gabaritoAres->preencherQuestao($gabaritoAres,"E","H","E","K","B","D","D","J","G","A","C");
$gabaritoAtena->preencherQuestao($gabaritoAtena,"A","E","D","H","I","E","F","G","C","B","K");
$gabaritoApolo->preencherQuestao($gabaritoApolo,"D","G","C","I","K","F","B","H","A","E","J");
$gabaritoHefesto->preencherQuestao($gabaritoHefesto,"G","K","F","A","C","H","J","K","D","F","B");
$gabaritoAfrodite->preencherQuestao($gabaritoAfrodite,"C","A","I","F","J","G","K","I","B","C","E");
$gabaritoHermes->preencherQuestao($gabaritoHermes,"F","C","K","E","G","I","H","D","K","J","A");
$gabaritoDionisio->preencherQuestao($gabaritoDionisio,"K","B","B","G","H","J","I","A","I","G","D");
$gabaritoHades->preencherQuestao($gabaritoHades,"B","F","J","D","A","K","G","C","E","H","F");







// Recebe os valores do formulário e os passa a variáveis

// Recebe os valores das variáveis e passa ao objeto
$Usuario->preencherQuestao($Usuario,$_POST["questao1"],$_POST["questao2"],$_POST["questao3"],$_POST["questao4"],$_POST["questao5"],$_POST["questao6"],$_POST["questao7"],$_POST["questao8"],$_POST["questao9"],$_POST["questao10"],$_POST["questao11"]);



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



// Exibição do resultado
/*
echo $Usuario->resposta1;
echo $Usuario->resposta2; 
echo $Usuario->resposta3; 
echo $Usuario->resposta4; 
echo $Usuario->resposta5; 
echo $Usuario->resposta6; 
echo $Usuario->resposta7; 
echo $Usuario->resposta8; 
echo $Usuario->resposta9; 
echo $Usuario->resposta10;
echo $Usuario->resposta11;


*/



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

?>
<br>
<INPUT TYPE="button" VALUE="Voltar" onClick="history.go(-1);"></INPUT><center>
Versão alpha2