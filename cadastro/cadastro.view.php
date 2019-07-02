<?php
//Connect
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);
//verificando se o E-mail já não esta cadastrado
$s = "SELECT uid, nome, sexo, nascimento, rg, telefone, cpf, email, verificado FROM " . PFIX . "user_login WHERE uid='$uid' ";
$r = $Qry->query($s);
$l = $Qry->rows($r);
if ($l && ($code == 0 || $code == 1) ) {
    // pegando os dados de identificacao do usuario
    $d = $Qry->arr($r);
    
    //inserindo info no objeto
    $msg[320]['results']['pessoal']['uid'] = $d[0]['uid'];
    $msg[320]['results']['pessoal']['token'] = $token;
    $msg[320]['results']['pessoal']['email'] = $d[0]['email'];
    $msg[320]['results']['pessoal']['nome'] = $d[0]['nome'];
    $msg[320]['results']['pessoal']['rg'] = $d[0]['rg'];
    $msg[320]['results']['pessoal']['telefone'] = $d[0]['telefone'];
    $msg[320]['results']['pessoal']['imagem'] = userImagem($d[0]['uid'],$Qry);
    $msg[320]['results']['pessoal']['social'] = $social;
    $msg[320]['results']['pessoal']['sexo'] = $d[0]['sexo'];
    $msg[320]['results']['pessoal']['nasc'] = $d[0]['nascimento'] ? date('d-m-Y',$d[0]['nascimento']) : '';
    $msg[320]['results']['pessoal']['cpf'] = substr($d[0]['cpf'], 0, 3) . '.***.***-' . substr($d[0]['cpf'], 9, 2);
    $msg[320]['results']['pessoal']['verificado'] = $d[0]['verificado'] ? true : false;
}

//pegando o endereco do usuario
$s = "SELECT cep, logradouro, numero, complemento, bairro, cidade, uf FROM " . PFIX . "user_endereco WHERE uid='$uid' ";
$r = $Qry->query($s);
$l = $Qry->rows($r);
if ($l && ($code == 0 || $code == 2)) {
    $d = $Qry->arr($r);
    //inserindo info no objeto
    $msg[320]['results']['endereco']['cep']         = $d[0]['cep'];
    $msg[320]['results']['endereco']['logradouro']  = $d[0]['logradouro'];
    $msg[320]['results']['endereco']['numero']      = $d[0]['numero'];
    $msg[320]['results']['endereco']['complemento'] = $d[0]['complemento'];
    $msg[320]['results']['endereco']['bairro']      = $d[0]['bairro'];
    $msg[320]['results']['endereco']['cidade']      = $d[0]['cidade'];
    $msg[320]['results']['endereco']['uf']          = $d[0]['uf'];
}elseif($code == 0 || $code == 2){
    $msg[320]['results']['endereco'] = false;
}

//pegando as imagens do documento do usuario
$s = "SELECT documento, lado, data, imagem, time FROM " . PFIX . "user_anexo_documento WHERE uid='$uid' ORDER BY lado ASC ";
$r = $Qry->query($s);
$l = $Qry->rows($r);
if ($l && ($code == 0 || $code == 3) ) {
    $d = $Qry->arr($r);
    //inserindo info no objeto
    for($i=0;$i<count($d);$i++){
        //inserindo info no objeto
        $msg[320]['results']['documento'][$i]['documento'] = $d[$i]['documento'];
        $msg[320]['results']['documento'][$i]['data']      = date('d-m-Y',$d[$i]['time']);
        $msg[320]['results']['documento'][$i]['lado']      = $d[$i]['lado'];
        $msg[320]['results']['documento'][$i]['imagem']    = IMGPATH.$d[$i]['imagem'];
    }
}elseif($code == 0 || $code == 3){
    $msg[320]['results']['documento'] = false;
}    
//pegando as imagens do documento do usuario
$s = "SELECT documento, lado, data, imagem, time FROM " . PFIX . "user_anexo_comprovante WHERE uid='$uid' ORDER BY lado ASC ";
$r = $Qry->query($s);
$l = $Qry->rows($r);
if ($l && ($code == 0 || $code == 4) ) {
    $d = $Qry->arr($r);
    //inserindo info no objeto
    for($i=0;$i<count($d);$i++){
        //inserindo info no objeto
        $msg[320]['results']['comprovante'][$i]['documento'] = $d[$i]['documento'];
        $msg[320]['results']['comprovante'][$i]['data']      = date('d-m-Y',$d[$i]['time']);
        $msg[320]['results']['comprovante'][$i]['lado']      = $d[$i]['lado'];
        $msg[320]['results']['comprovante'][$i]['imagem']    = IMGPATH.$d[$i]['imagem'];
    }
}elseif($code == 0 || $code == 4){
    $msg[320]['results']['comprovante'] = false;
}
//pegando a foto do usuario
$s = "SELECT foto, time FROM " . PFIX . "user_foto WHERE uid='$uid' ";
$r = $Qry->query($s);
$l = $Qry->rows($r);
if ($l && ($code == 0 || $code == 5) ) {
    $d = $Qry->arr($r);
    //inserindo info no objeto
    for($i=0;$i<count($d);$i++){
        //inserindo info no objeto
        $msg[320]['results']['foto'][$i]['foto'] = $d[$i]['foto'];
        $msg[320]['results']['foto'][$i]['data'] = date('d-m-Y',$d[$i]['time']);
    }
}elseif($code == 0 || $code == 5){
    $msg[320]['results']['foto'] = false;
}
/**/
//ajustando a saida
$output = $msg[320];
    
//Desconectando o banco
$Conn->desconnect($c);
