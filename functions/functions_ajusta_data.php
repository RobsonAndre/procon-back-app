<?php

function ajustaData($data) {
    $tam = strlen($data);
    $dt = explode('-', $data);
    if ($tam != 10) {
        return false;
    } else {
        //ajuste para aceitar a data no formato YYYY-mm-dd ou dd-mm-YYYY
        if(strlen($dt[0])==4){
           $temp = $dt[0];
           $dt[0] = $dt[2];
           $dt[2] = $temp;
        }
        
        return $d[0].'-'.$d[1].'-'.$d[2];
        
    }
}