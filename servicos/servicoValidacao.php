<?php

function validaNome(string $nome) : bool{
    if(empty($nome)){
        setarMensagemErro("O cadastro não pode conter dados vazios!");
        return false;
    }
    
    elseif(strlen($nome) < 3){
        setarMensagemErro("O nome não pode conter menos de 3 caracteres!");
        return false;
    }
    
    elseif(strlen($nome) > 40){
        setarMensagemErro("O nome não pode conter mais de 40 caracteres!");
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool{
    if(!is_numeric($idade)){
        setarMensagemErro("O valor no campo idade deve ser um número!");
        return false;
    }
    return true;
}