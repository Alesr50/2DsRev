<!DOCTYPE html>
<title>Array Mapping </title>

<?php


echo "</br>";
$arr=["primeiro valor", "segundo valor", "terceiro valor"];
print_r($arr);

echo "</br>";

//arrays com chaves, 

$notas = [
    "joao" => 5,
    "maria" => 6,
    "omar" => 4,
    "gabriela" => 8,
    "daniel" => 2,
    "lucia" => 9
];



echo "nota do joao : ". $notas['joao']; // exibe 5
echo "</br>";
echo "nota da maria : ".$notas['maria']; // exibe 6
echo "</br>";



$arrayPessoas=array( "nome 01"=>"Alessandro",
            "sobrenome 01"=>"Silva", 
            "idade 01"=>"33",
            "nome 02"=>"Paulo",
            "sobrenome 02"=>"Dionizio", 
            "idade 02"=>"18" );
print_r($arrayPessoas);

echo "<br/><br/>";
echo "Nome: <b>".$arrayPessoas["nome 01"]."</b><br/>";
echo "Sobrenome: <b>".$arrayPessoas["sobrenome 01"]."</b><br/>";
echo "Idade: <b>".$arrayPessoas["idade 01"]."</b>";

echo "</br>";
echo "</br>";

$carros = array("Volvo", "BMW", "Toyota");
echo "Eu gosto" . $carros[0] . ", " . $carros[1] . " and " . $carros[2] . ".";

echo "</br>";
echo "</br>";

//funcao count
echo "Temos o total de ".count($carros)." registros na Array Carros";

//funcao in_array
echo "</br>";
echo "</br>";
echo "</br>";

if(in_array('Ford',$carros)){
    echo "TEM SIM OK";

}else{
    echo "Não encontrado";
}

//funcao array_key_exists

echo "</br>";
echo "</br>";
echo "</br>";

if(array_key_exists('nome',$arrayPessoas)){
    echo "OK";
}else{
    echo "Não encontrado";
}


//funcao isset, verifica se tem a key e se tem valor
echo "</br>";
if(isset($arrayPessoas['nome'])){
    echo "ISSET OK";

}else{
    echo "Isset Não encontrado";
}

//ordenação 
echo "</br>";
asort($arrayPessoas);
print_r($arrayPessoas);
echo "</br>";


echo "</br>";
arsort($arrayPessoas);
print_r($arrayPessoas);
echo "</br>";

echo "</br>";
ksort($arrayPessoas);
print_r($arrayPessoas);
echo "</br>";


foreach($carros as  $carro){
    echo "Varrendo array  ". $carro."</br>";
}

echo "</br>";
echo "<p>Lista de Pessoas</p>";

foreach($arrayPessoas as $indice =>$campo){
    echo "{$indice} => {$campo} </br>";
}
echo "</br>";

foreach ($notas as $key => $nota) {
    
    echo "O aluno $key => tem a nota $nota </br> "; 
    if ($nota>6){

        echo "O aluno $key passou de ano</br>";
    } 
    
}

 ?>