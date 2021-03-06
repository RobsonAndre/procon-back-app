<?php

function validaNascimento($data) {
    $limite = date('Y') - 12;
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
        
        if (count($dt) == 3&& ($dt[0] > 0 && $dt[0] < 32) && ($dt[1] > 0 && $dt[1] < 13) && ($dt[2] > 1930 && $dt[2] < $limite)) {
            return(mktime(0, 0, 0, $dt[1], $dt[0], $dt[2]));
        } else {
            return false;
        }
    }
}