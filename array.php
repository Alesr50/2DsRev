<!DOCTYPE html>
<title>Array</title>
<?php

$notas = array(5, 6, 4, 8, 2, 9);
$notas = [5, 6, 4, 8, 2, 9];
$array = array(0,1,2,3);
$array = [10,20,30,40,"Felipe",99.95];
echo "</br>";


echo $array[0];
echo "</br>";
echo $array[1];
echo "</br>";
echo $array[2];
echo "</br>";
echo $array[3];
echo "</br>";
echo $array[4];
echo "</br>";
echo $array[5];




echo "</br>";
$vetor=["primeiro valor", "segundo valor", "terceiro valor"];
print_r($vetor);
echo "</br>";

echo $notas[0]; // exibe 5
echo "</br>";
echo $notas[1]; // exibe 6
echo "</br>";
echo $notas[2]; // exibe 4
echo "</br>";
echo $notas[3]; // exibe 8
echo "</br>";
echo $notas[4]; // exibe 2
echo "</br>";
echo $notas[5]; // exibe 9
echo "</br>";

//arrays com chaves, 

$notas = [
    "josimar" => 5,
    "cleusa" => 6,
    "felipe" => 4,
    "gabriela" => 8,
    "daniel" => 2,
    "paulo" => 9
];
$array = ["indice 01" =>10,
        "indice 02" =>"OI EU SOU O GOKU" 
    
    ];
    echo "Aqui é o indice que criamos 01 ".$array['indice 01'];
    echo "</br>";
    echo "Aqui é o indice que criamos 02 ".$array['indice 02'];
    echo "</br>";
echo "nota do josimar : ". $notas['josimar']; // exibe 5
echo "</br>";
echo "nota da cleusa: ".$notas['cleusa']; // exibe 6
echo "</br>";
echo "nota do felipe ".$notas['felipe']; // exibe 4
echo "</br>";
echo "Nota do paulo ".$notas['paulo']; // exibe 9
echo "</br>";
echo $notas['daniel']; // exibe 2
echo "</br>";
echo $notas['gabriela']; // exibe 8

echo "</br>";


$arr=[ "nome"=>"Alessandro",
        "sobrenome"=>"Silva",
        "idade"=>33];
print_r($arr);

echo "<br/><br/>";
echo "Nome: <b>".$arr["nome"]."</b><br/>";
echo "Sobrenome: <b>".$arr["sobrenome"]."</b><br/>";
echo "Idade: <b>".$arr["idade"]."</b>";

echo "</br>";

$cars = array("Volvo", "BMW", "Toyota");

echo "Eu gosto" . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


 ?>