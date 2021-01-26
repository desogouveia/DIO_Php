<?php

session_start();

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if($idade >= 6 && $idade <= 12){
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
            $_SESSION['mensagemDeSucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
    }
}elseif($idade >= 13 && $idade <= 18){
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescentes')
            $_SESSION['mensagemDeSucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
    }
}else{
    for($i=0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
            $_SESSION['mensagemDeSucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
    }
}