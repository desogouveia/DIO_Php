<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="autor" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
    
    <form action="script.php" method="POST">
    <?php
        $mensagemDeErro = isset($_SESSION['mensagemDeErro']) ? $_SESSION['mensagemDeErro'] : "";

        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
    ?>
        <p>Seu nome: <input type="text" name="nome"/></p>
        <p>Sua idade: <input type="text" name="idade"/></p>
        <p><input type="submit" value="Enviar"/></p>

    <?php
        $mensagemDeSucesso = isset($_SESSION['mensagemDeSucesso']) ? $_SESSION['mensagemDeSucesso'] : "";

        if(!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }
    ?>
    </form>
</body>
</html>