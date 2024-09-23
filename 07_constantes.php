<?php
//Constantes
define("NOME","Eduardo");
define("IDADE",23);
define("ALTURA", 1.84);
define("CASADO", false);

//Utilizando as constantes
echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.', tenho '.ALTURA.'m de altura';
if(CASADO):
    echo ',sou casado';
else:
    echo ',não sou casado';
endif;