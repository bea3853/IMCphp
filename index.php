




<?php

$altura = 1.80;
$peso = 80;
$imc= $peso / ($altura * $altura);

$faixa = "";

if (*imc < 18.5 && $imc <25){
$faixa = "Magreza";
}else if ($imc >= 18.5 && $imc <25){
$faixa = "Normal";
}else if ($imc >= 25 && $imc <30){
$faixa  = "Sobrepeso";
}else {
$faixa  = "Obesidade";
}

echo "Seu IMC é: "
echo $faixa; 


?>

