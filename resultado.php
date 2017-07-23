<?php
//echo nl2br("\nresultado da questão 1: ") . $_POST["questao1"];
//echo nl2br("\nresultado da questão 2: ") . $_POST["questao2"] ;
//echo nl2br("\nresultado da questão 3: ") . $_POST["questao3"] ;
//echo nl2br("\nresultado da questão 4: ") . $_POST["questao4"] ;
//echo nl2br("\nresultado da questão 5: ") . $_POST["questao5"] ;
//echo nl2br("\nresultado da questão 6: ") . $_POST["questao6"] ;
//echo nl2br("\nresultado da questão 7: ") . $_POST["questao7"] ;
//echo nl2br("\nresultado da questão 8: ") . $_POST["questao8"] ;
//echo nl2br("\nresultado da questão 9: ") . $_POST["questao9"] ;
//echo nl2br("\nresultado da questão 10: ") . $_POST["questao10"];
//echo nl2br("\nresultado da questão 11: ") . $_POST["questao11"];


// declaração das variáveis que irão receber a quantidade de cada resultado
$zeus = $poseidon = $demeter = $ares = $atena = $apolo = $hefesto = $afrodite = $dionisio = $hermes=0;

// Recebe os valores do formulário e os passa a variáveis
$result1 = $_POST["questao1"];
$result2 = $_POST["questao2"] ;
$result3 = $_POST["questao3"] ;
$result4 = $_POST["questao4"] ;
$result5 = $_POST["questao5"] ;
$result6 = $_POST["questao6"] ;
$result7 = $_POST["questao7"] ;
$result8 = $_POST["questao8"] ;
$result9 = $_POST["questao9"] ;
$result10 = $_POST["questao10"] ;
$result11 = $_POST["questao11"] ;



function questao1($result1){
	/* escopo das variáveis criava os erros anteriores
	declará-las com a palavra reservada "global" resolve o problema*/
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes,$hades;
	switch($result1){
		case "A":
			$atena++;
			break;
		case 'B':
			$hades++;
			break;
		case "C":
			$afrodite++;
			break;
		case "D":
			$apolo++;
			break;
		case "E":
			$ares++;
			break;
		case 'F':
			$hermes++;
			break;
		case "G":
			$hefesto++;
			break;
		case "H":
			$poseidon++;
			break;
		case "I":
			$demeter++;
			break;
		case "J":
			$zeus++;
			break;
		case "K":
			$dionisio++;
			break;
		default:
			return -9999;
			break;
	}
		
}


function questao2($result2){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result2){
		case "A":
			$afrodite++;
			break;
		case 'B':
			$dionisio++;
			break;
		case "C":
			$hermes++;
			break;
		case "D":
			$zeus++;
			break;
		case "E":
			$atena++;
			break;
		case 'F':
			$hades++;
			break;
		case "G":
			$apolo++;
			break;
		case "H":
			$ares++;
			break;
		case "I":
			$demeter++;
			break;
		case "J":
			$poseidon++;
			break;
		case "K":
			$hefesto++;
			break;
		default:
			return -9999;
			break;
	}
		
}

function questao3($result3){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result3){
		case "A":
			$zeus++;
			break;
		case 'B':
			$dionisio++;
			break;
		case "C":
			$apolo++;
			break;
		case "D":
			$atena++;
			break;
		case "E":
			$ares++;
			break;
		case 'F':
			$hefesto++;
			break;
		case "G":
			$demeter++;
			break;
		case "H":
			$poseidon++;
			break;
		case "I":
			$afrodite++;
			break;
		case "J":
			$hades++;
			break;
		case "K":
			$hermes++;
			break;
		default:
			return -9999;
			break;
	}
		
}

function questao4($result4){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result4){
		case "A":
			$hefesto++;
			break;
		case 'B':
			$poseidon++;
			break;
		case "C":
			$demeter++;
			break;
		case "D":
			$hades++;
			break;
		case "E":
			$hermes++;
			break;
		case 'F':
			$afrodite++;
			break;
		case "G":
			$dionisio++;
			break;
		case "H":
			$atena++;
			break;
		case "I":
			$apolo++;
			break;
		case "J":
			$zeus++;
			break;
		case "K":
			$ares++;
			break;
		default:
			return -9999;
			break;
	}
		
}


function questao5($result5){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes, $hades;
	switch($result5){
		case "A":
			$hades++;
			break;
		case 'B':
			$ares++;
			break;
		case "C":
			$hefesto++;
			break;
		case "D":
			$poseidon++;
			break;
		case "E":
			$demeter++;
			break;
		case 'F':
			$zeus++;
			break;
		case "G":
			$hermes++;
			break;
		case "H":
			$dionisio++;
			break;
		case "I":
			$atena++;
			break;
		case "J":
			$afrodite++;
			break;
		case "K":
			$apolo++;
			break;
		default:
			return -9999;
			break;
	}
		
}

function questao6($result6){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result6){
		case "A":
			$poseidon++;
			break;
		case 'B':
			$demeter++;
			break;
		case "C":
			$zeus++;
			break;
		case "D":
			$ares++;
			break;
		case "E":
			$atena++;
			break;
		case 'F':
			$apolo++;
			break;
		case "G":
			$afrodite++;
			break;
		case "H":
			$hefesto++;
			break;
		case "I":
			$hermes++;
			break;
		case "J":
			$dionisio++;
			break;
		case "K":
			$hades::
			break;
		default:
			return -9999;
			break;
	}
		
}

function questao7($result7){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result7){
		case "A":
			$demeter++;
			break;
		case 'B':
			$apolo++;
			break;
		case "C":
			$poseidon++;
			break;
		case "D":
			$ares++;
			break;
		case "E":
			$zeus++;
			break;
		case 'F':
			$atena++;
			break;
		case "G":
			$hades++;
			break;
		case "H":
			$hermes++;
			break;
		case "I":
			$dionisio++;
			break;
		case "J":
			$hefesto++;
			break;
		case "K":
			$afrodite++;
			break;
		default:
			return -9999;
			break;
	}
		
}

function questao8($result8){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result8){
		case "A":
			$dionisio++;
			break;
		case 'B':
			$zeus++;
			break;
		case "C":
			$hades++;
			break;
		case "D":
			$hermes++;
			break;
		case "E":
			$poseidon++;
			break;
		case 'F':
			$demeter++;
			break;
		case "G":
			$atena++;
			break;
		case "H":
			$apolo++;
			break;
		case "I":
			$afrodite++;
			break;
		case "J":
			$ares++;
			break;
		case "K":
			$hefesto++;
			break;
		default:
			return -9999;
			break;
	}
		
}

function questao9($result9){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result9){
		case "A":
			$apolo++;
			break;
		case 'B':
			$afrodite++;
			break;
		case "C":
			$atena++;
			break;
		case "D":
			$hefesto++;
			break;
		case "E":
			$hades++;
			break;
		case 'F':
			$poseidon++;
			break;
		case "G":
			$ares++;
			break;
		case "H":
			$zeus++;
			break;
		case "I":
			$dionisio++;
			break;
		case "J":
			$demeter++;
			break;
		case "K":
			$hermes++;
			break;
		default:
			return -9999;
			break;
	}
		
}

function questao10($result10){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result10){
		case "A":
			$ares++;
			break;
		case 'B':
			$atena++;
			break;
		case "C":
			$afrodite++;
			break;
		case "D":
			$demeter++;
			break;
		case "E":
			$apolo++;
			break;
		case 'F':
			$hefesto++;
			break;
		case "G":
			$dionisio++;
			break;
		case "H":
			$hades++;
			break;
		case "I":
			$zeus++;
			break;
		case "J":
			$hermes++;
			break;
		case "K":
			$poseidon++;
			break;
		default:
			return -9999;
			break;
	}
		
}

function questao11($result11){
	global $zeus,$poseidon, $demeter, $ares, $atena, $apolo, $hefesto, $afrodite, $dionisio, $hermes;
	switch($result11){
		case "A":
			$hermes++;
			break;
		case 'B':
			$hefesto++;
			break;
		case "C":
			$ares++;
			break;
		case "D":
			$dionisio++;
			break;
		case "E":
			$afrodite++;
			break;
		case 'F':
			$hades++;
			break;
		case "G":
			$zeus++;
			break;
		case "H":
			$demeter++;
			break;
		case "I":
			$poseidon++;
			break;
		case "J":
			$apolo++;
			break;
		case "K":
			$atena++;
			break;
		default:
			return -9999;
			break;
	}
		
}

// Verificando se alguma das alternativas retornou erro
// Operador ternário fica mais legível que if/else
echo (questao1($result1)==-9999) ? "A questão  causou um erro": "" ;
echo (questao2($result2)==-9999) ? "A questão  causou um erro": "" ;
echo (questao3($result3)==-9999) ? "A questão  causou um erro": "" ;
echo (questao4($result4)==-9999) ? "A questão  causou um erro": "" ;
echo (questao5($result5)==-9999) ? "A questão  causou um erro": "" ;
echo (questao6($result6)==-9999) ? "A questão  causou um erro": "" ;
echo (questao7($result7)==-9999) ? "A questão  causou um erro": "" ;
echo (questao8($result8)==-9999) ? "A questão  causou um erro": "" ;
echo (questao9($result9)==-9999) ? "A questão  causou um erro": "" ;
echo (questao1($result10)==-9999) ? "A questão  causou um erro": "";
echo (questao1($result11)==-9999) ? "A questão  causou um erro": "";

// Exibição do resultado

echo "Relação de deuses:\n 
Zeus: $zeus \n
Poseidon: $poseidon \n 
Demeter: $demeter \n
Ares: $ares \n
Atena $atena \n
Apolo: $apolo \n
Hefesto: $hefesto \n
Afrodite: $afrodite \n
Hermes: $hermes \n
Dionísio: $dionisio \n
Hades: $hades \n";


?>
<INPUT TYPE="button" VALUE="Voltar" onClick="history.go(-1);">
