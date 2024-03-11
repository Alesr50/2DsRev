<!DOCTYPE html>
<title>Date() e Time()</title>
    <?php
     echo "Hoje é ".date("d , m, Y");
     echo "</br>";
     echo date("l") . "<br>";
     echo "</br>";
     echo "Hoje é ".date("F d, Y");
     echo "</br>";
     // Prints the day
  
     /*       
     %A: dia da semana por extenso.
%d: dia do mês representado com dois digitos.
%B: mês por extenso.
%Y: ano representado com quatro digitos.
     */
     echo "</br>";
    echo "A hora exata é ".date("H:i:s");

 echo "</br>";
    $t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
    ?>

