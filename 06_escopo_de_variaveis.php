<?php
//ESCOPO GLOBAL
$nome = "Eduardo Antunes";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    //ESCOPO LOCAL
    GLOBAL $nome;
    echo $nome;
}
exibeNome($nome);
echo "<hr>";

function exibeCidade(){
    //ESCOPO LOCAL
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";
function soma(){
   echo $GLOBALS['a']+$GLOBALS['b']+$GLOBALS['c'];
}

soma();