<?php

$op="/";

switch($op){
    case "-":
        echo "Sub";
    break;
    case "+":
        echo "Sum";
    case "/":
        echo "Div";
 default:
        echo "errado";
}
echo "</br>";

$testeswitch="azul";

switch ($testeswitch){
    case "vermelho":
        echo "vermerlhooooo";
        break;
    case "azul":
        echo "azullll";
        break;

    default:
            echo "DEFAULT";
}
echo "</br>";

$testeswitchN=1;

switch ($testeswitchN){
    case 1:
        echo "UUUMMMMMMMMM";
        break;
    case 2:
        echo "DOIIIIISSS";
        break;

    default:
            echo "DEFAULT";
}
echo "</br>";

//calculador php
$a=10;
$b=0;
$op="/";

switch($op){
    case "+":
        echo "Soma ".($a+$b);
        break;
    case "-":
         echo "A subtração é ".($a-$b);
    case "/":
        if($b>0){
            echo "A divisão ".($a/$b);
        }else{
            echo "não é possível";
        }
         break;
    default:
        echo "errado";
        break;  
}

echo "</br>";

//funções Math()
$pi=pi();
echo "</br>";
echo $pi;
echo "</br>";
echo(pi());

echo "</br>";

echo(min(0, 150, 30, 20, -8, -20));  // retorna -20
echo "</br>";
echo(max(0, 150, 30, 20, -8, -20));  // retorna 150
echo "</br>";


echo(sqrt(64)); //raiz quadrada
echo "</br>";

echo(rand()); //numero randomico

echo "</br>";

echo(rand(1,15)); //numero randomico
echo "</br>";
echo rand(1,5);


?>