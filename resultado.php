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
questao1($result1);

?>
