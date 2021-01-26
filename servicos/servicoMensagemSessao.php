<?php

session_start();

function setarMensagemErro(string $mensagem) : void{
    $_SESSION['mensagemDeErro'] = $mensagem;
}

function obterMensagemErro() : ?    string{
    if(isset($_SESSION['mensagemDeErro']))
        return $_SESSION['mensagemDeErro'];
    
    return null;
}

function setarMensagemSucesso(string $mensagem) : void{
    $_SESSION['mensagemDeSucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?    string{
    if(isset($_SESSION['mensagemDeSucesso']))
        return $_SESSION['mensagemDeSucesso'];
    
    return null;
}

function removerMensagemErro() : void{
    if(isset($_SESSION['mensagemDeErro']))
        unset($_SESSION['mensagemDeErro']);
}

function removerMensagemSucesso() : void{
    if(isset($_SESSION['mensagemDeSucesso']))
        unset($_SESSION['mensagemDeSucesso']);
}