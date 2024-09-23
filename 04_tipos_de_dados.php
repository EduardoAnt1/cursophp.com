<?php
/************* Escalaraes *************/

//string 
$nome = "123";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo'<hr>';

//int 
$idade = 27;
var_dump($idade);
if(is_int($nome)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo'<hr>';

//float 
$altura = 1.77;
var_dump($altura);
if(is_float($nome)):
    echo "É um float";
else:
    echo "Não é um float";
endif;
echo'<hr>';

//boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;

/************* Compostos *************/

//array

$frutas = array("Laranja", "Maçã", "Uva",12,34,17.8);
var_dump($frutas);
if(is_array($frutas)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo'<hr>';

//objeto

class Pessoa {
    public $nome;
    public function atribuirNome($nome){
        $this->nome = $nome;
    }
}

$pessoa = new Pessoa();
$pessoa->atribuirNome("Eduardo");
var_dump($pessoa);

if(is_object($pessoa)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;

/************* Especiais *************/

//NULL

$varNull = null;
var_dump($varNull);
if($varNull === null):
    echo "É NULL";
else:
    echo "Não é NULL";
endif;

//resource
