<?php

function pegarIndMsgPai($resp,$Qry) {
    while($resp){
        $s = "SELECT indice, ind_resposta FROM ".PFIX."procon_mensagem WHERE indice = '$resp' ";
        $r = $Qry->query($s);
        $d = $Qry->arr($r);
        $resp   = $d[0]['ind_resposta'];
        $indice = $d[0]['indice'];
    }
    return ($indice);
    
}
