<?php
if($uf){
    //Conectando
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);
    $s = "SELECT id, codigo, nome FROM " . PFIX . "municipio WHERE uf LIKE '$uf' ";

    $r = $Qry->query($s);
    /**/
    $l = $Qry->rows($r);
    if ($l) {

        $msg[190]['qtde'] = $l;
        $msg[190]['uf'] = $uf;

        $arr = $Qry->arr($r);

        for($i=0;$i<count($arr);$i++){
            $msg[190]['results'][$i]['id']        = $arr[$i]['id'];
            $msg[190]['results'][$i]['municipio'] = utf8_encode($arr[$i]['nome']);
            $msg[190]['results'][$i]['codigo']    = $arr[$i]['codigo'];
        }
        $output = $msg[190];

    }else{

        $output = $msg[191];

    }
    /**/
    $Conn->desconnect($c);
}else{

    $msg[191]['info'] = 'UF não informada ou desconhecida!';
    $output = $msg[191];
    
}