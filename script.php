<?php

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescentes";
$categorias[] = "Adulto";

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome) || empty($idade)){
    echo "O cadastro não pode conter dados vazios!";
    return;
}

if(strlen($nome) < 3){
    echo "O nome não pode conter menos de 3 caracteres!";
    return;
}

if(strlen($nome) > 40){
    echo "O nome não pode conter mais de 40 caracteres!";
    return;
}

if(!is_numeric($idade)){
    echo "O valor no campo idade deve ser um número!";
    return;
}

if($idade >= 6 && $idade <= 12){
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}elseif($idade >= 13 && $idade <= 18){
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescentes')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}else{
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}