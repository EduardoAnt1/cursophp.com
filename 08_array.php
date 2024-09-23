<?php
//Arrays
$carros = array(1=>"BMW",2=>"Veloster",3=>"Hillux");
$carros[] = 'Amarok';
$carros[10] = "Camaro";
print_r($carros);

echo "<br>";
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[]= "Honda";
$motos[5] = "Suzuki";
echo $motos[1];

echo "<br>";
echo "<hr>";


$clientes = ["Eduardo","Luis","Felipe"];
print_r($clientes);

echo "<br>";
echo "<hr>";

//count
echo 'Temos '.count($carros).' carros';
echo "<br>";
echo 'Temos '.count($motos).' motos';
echo "<br>";
echo 'Temos '.count($clientes).' clientes';
echo "<br>";

echo "<hr>";

//For each client
echo 'Clientes:';
foreach ($clientes as $nome){
    echo "<br>".$nome;
}