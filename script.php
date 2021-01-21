<?php

session_start();

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescentes";
$categorias[] = "Adulto";

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome) || empty($idade)){
    $_SESSION['mensagemDeErro'] = "O cadastro não pode conter dados vazios!";
    header('location: index.php');
    return;
}

elseif(strlen($nome) < 3){
    $_SESSION['mensagemDeErro'] = "O nome não pode conter menos de 3 caracteres!";
    header('location: index.php');
    return;
}

elseif(strlen($nome) > 40){
    $_SESSION['mensagemDeErro'] = "O nome não pode conter mais de 40 caracteres!";
    header('location: index.php');
    return;
}

elseif(!is_numeric($idade)){
    $_SESSION['mensagemDeErro'] = "O valor no campo idade deve ser um número!";
    header('location: index.php');
    return;
}

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