<!DOCTYPE html>
<title>Laços</title>
<html>
</body>


<h1>Laço FOR</h1>
</br>

<?php
   
   for($i=0;$i<100;$i++) {

    echo "i é igual a ".$i."</br>";
    $somar=+$i;
   }

   echo $somar;
   $par=0;
echo "</br>";

   for($i=0;$i<=40;$i++) {
        echo "i é igual a ".$i."</br>";
        if($i%2==0){
            echo "o numero $i é par </br>";
           
            

        }
    }
echo $par;
echo "</br>";


?>



<h1>Laço WHILE</h1>
</br>



<?php
  $i=0;

  while($i<10) {
    echo "i é igual a ".$i."</br>";
    $i++;
   }

  
?>


<h1>Laço DO WHILE</h1>
</br>



<?php
    $i=0;
    do{

        echo "i é igual a ".$i."</br>";
        $i++;
    }while($i<10);

   

   
  
?>



</body>
</html>