<?php

function statusMensagem($int){
    switch($int){
        case 1  : $mensagem = 'Aguardando an&aacute;lise';
        break;
        case 2  : $mensagem = 'Em an&aacute;lise';
        break;
        case 3  : $mensagem = 'Aguardando processamento';
        break;
        case 4  : $mensagem = 'Em processamento';
        break;
        case 5  : $mensagem = 'Respondida';
        break;
        default : 'Indefinida';
        break;
    }
    return($mensagem);
}