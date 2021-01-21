<?php

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescentes";
$categorias[] = "Adulto";

//print_r($categorias);

$nome = "Eduardo";
$idade = 17;

var_dump($nome);
var_dump($nome);

if($idade >= 6 && $idade <= 12){
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
            echo "O nadador ".$nome."compete na categoria ".$categorias[$i];
    }
}elseif($idade >= 13 && $idade <= 18){
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescentes')
            echo "O nadador ".$nome."compete na categoria ".$categorias[$i];
    }
}else{
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
            echo "O nadador ".$nome."compete na categoria ".$categorias[$i];
    }
}