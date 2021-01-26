<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string{

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescentes';
    $categorias[] = 'Adulto';

    if(validaNome($nome) && validaIdade($idade)){
        removerMensagemErro();
        if($idade >= 6 && $idade <= 12){
            for($i=0; $i < count($categorias); $i++){
                if($categorias[$i] == 'Infantil')
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);                    
            }
        }elseif($idade >= 13 && $idade <= 18){
            for($i=0; $i < count($categorias); $i++){
                if($categorias[$i] == 'Adolescentes')
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);                    
            }
        }else{
            for($i=0; $i < count($categorias); $i++){
                if($categorias[$i] == 'Adulto')
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);                   
            }
        }
        return null;
    } else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }

}