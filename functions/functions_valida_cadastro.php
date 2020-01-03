<?php
function validaCadastro($uid, $Qry){
    $ret = 1;
    /**/
    //verificando se o email foi validado, o sexo, o telefone, o rg e se a data de nascimento foi digitada
    $s = "SELECT sexo, nascimento, rg, telefone, verificado FROM ".PFIX."user_login WHERE uid = '$uid' ";
    /**/
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    
    if($l){
        $d = $Qry->arr($r);
        $ret = $d[0]['sexo']       == '' ? 0 : $ret;
        $ret = $d[0]['nascimento'] ==  0 ? 0 : $ret;
        $ret = $d[0]['rg']         == '' ? 0 : $ret;
        $ret = $d[0]['telefone']   == '' ? 0 : $ret;
        //$ret = $d[0]['verificado'] ==  0 ? 0 : $ret;
    }else{
        $ret = 0;
    }
    //verificando se o endereco foi digitado
    $s = "SELECT indice FROM ".PFIX."user_endereco WHERE uid = '$uid' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    $ret = $l==0 ? 0 : $ret;
    //verificando se o documento foi enviado
    $s = "SELECT indice FROM ".PFIX."user_anexo_documento WHERE uid = '$uid' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    $ret = $l==0 ? 0 : $ret;
    //verificando se o comprovante de endereco foi enviado
    $s = "SELECT indice FROM ".PFIX."user_anexo_comprovante WHERE uid = '$uid' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    $ret = $l==0 ? 0 : $ret;
    /**/
    return ($ret);
}
