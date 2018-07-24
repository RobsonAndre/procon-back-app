<?php

function validaNascimento($data) {
    $limite = date('Y') - 12;
    $tam = strlen($data);
    $dt = explode('-', $data);
    if ($tam != 10) {
        return false;
    } else {
        if (count($dt) == 3&& ($dt[0] > 0 && $dt[0] < 32) && ($dt[1] > 0 && $dt[1] < 13) && ($dt[2] > 1930 && $dt[2] < $limite)) {
            return(mktime(0, 0, 0, $dt[1], $dt[0], $dt[2]));
        } else {
            return false;
        }
    }
}