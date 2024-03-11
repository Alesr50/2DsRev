
<title>Ex 10092021</title>
<?php

//configurar o timezone
date_default_timezone_set('America/Sao_Paulo');
// Exibe alguma coisa como: Monday
echo date("l");
echo "</br>";
// Exemplo com barra (/)
echo date("d/m/Y");
// Mostra a data atual
echo "</br>";
// Exemplo com traço (-)
echo date("Y-m-d");
// Mostra a data atual

echo "</br>";



echo "</br>";
echo date('h:i:s').'<br />'; //Resultado: 06:52:49
echo "</br>";
echo date('H:i:s'); //Resultado: 18:52:03
echo "</br>";



//arrays

$inteiros = [10,11,12,13,14,15];


echo "</br>";
echo $inteiros[0];
echo "</br>";
echo $inteiros[2];
echo "</br>";
echo $inteiros[4];
echo "</br>";

$textos=["primeiro texto", "segundo texto", "terceiro texto","quarto texto","quinto texto"];


echo $textos[2];
echo "</br>";
echo $textos[4];
echo "</br>";

$valores =["real 01"=>19.99,
"real 02"=>8.6,
"inteiro"=>10,
"texto 01"=>"Texto 01",
"texto 02"=>'texto 02'];


echo $valores['real 01'];
echo "</br>";
echo $valores['texto 02'];
echo "</br>";

?>