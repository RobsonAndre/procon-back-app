<?php

//Conectando com o banco
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);
//SQL
/*
$s = "	SELECT 
                        " . PFIX . "base_reclamacao_tipo.indice AS uid, 
				" . PFIX . "base_reclamacao_tipo.tipo AS reclamacao 
			FROM 
				" . PFIX . "rel_reclamacao_estabelecimento_tipo, 
				" . PFIX . "base_reclamacao_tipo 
			WHERE 
				" . PFIX . "rel_reclamacao_estabelecimento_tipo.status >= 0 
				AND
				" . PFIX . "rel_reclamacao_estabelecimento_tipo.ind_estabelecimento = '$ind_estabelecimento'
				AND
				" . PFIX . "rel_reclamacao_estabelecimento_tipo.ind_tipo = " . PFIX . "base_reclamacao_tipo.indice
			ORDER BY 
				" . PFIX . "base_reclamacao_tipo.tipo
		 ";
 */

$s = "SELECT " . PFIX . "base_reclamacao_tipo.indice AS uid,  " . PFIX . "base_reclamacao_tipo.obrigatorio, " . PFIX . "base_reclamacao_tipo.info, " . PFIX . "base_reclamacao_tipo.tipo AS reclamacao FROM " . PFIX . "base_reclamacao_tipo WHERE status >0 AND ind_estabelecimento = '$ind_estabelecimento' ORDER BY " . PFIX . "base_reclamacao_tipo.posicao, " . PFIX . "base_reclamacao_tipo.tipo ";

$r = $Qry->query($s);
$l = $Qry->rows($r);

$msg[210]['results']['qtde'] = $l;
/**/
if ($l) {
    $arr = $Qry->arr($r);
    for($i=0;$i<count($arr);$i++){
        $msg[210]['results']['list'][$i]['uid'] = $arr[$i]['uid']; 
        $msg[210]['results']['list'][$i]['reclamacao'] = utf8_encode($arr[$i]['reclamacao']); 
        $msg[210]['results']['list'][$i]['obrigatorio'] = $arr[$i]['obrigatorio'] ? TRUE : FALSE; 
        $msg[210]['results']['list'][$i]['info'] = $arr[$i]['info']; 
    }    
}

$output = $msg[210];

//Desconectando o banco
$Conn->desconnect($c);
