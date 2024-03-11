<!DOCTYPE html>
<title>Laços</title>
<html>
</body>


<h1>Calculando</h1>
</br>

<?php

$op="";
$x=xxx;
$y=xx;

switch ($op){
    case "+":
        echo "A soma dos valores é ".($x+$y);
        break;
    case "-":
        echo "A subtração dos valores é ".($x-$y);
        break;
    case "/":
            if($y>0){
                echo "A divisão dos valores é ".($x/$y);
            }else{
                echo "Não é possível fazer a divisão";
            }        
        break;
    case "*":
        echo "A multiplicação dos valores é ".($x*$y);
        break;
            
    default:
            echo "ERRROOOUUUU!!!</br>";
}
echo "</br>";


$opc="";
$valor=xx;
switch($opc){
    case "Arvore":
        echo "A raiz é ".(sqrt($valor));
        break;
        case "Chuva":
            echo rand(1,25);
            break;
    default:
        echo "Errooouu";

}


?>




</br>
