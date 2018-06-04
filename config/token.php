<?php

class Token {

    //gera token
    public function geraToken($key, $uid, $social, $time) {
        return($key && $social && $uid && $time) ? base64_encode(sha1($key . "." . $social . "." . $uid . "." . $time) . '-' . base64_encode($uid) . '-' . base64_encode($social) . '-' . base64_encode($time)) : false;
    }

    //valida token
    public function validaToken($key, $token, $ldias, $time) {
        $token = base64_decode($token);
        $pts = explode('-', $token);
        $uid = base64_decode($pts[1]);
        $soc = base64_decode($pts[2]);
        $tme = base64_decode($pts[3]);
        $tkn = $pts[0];
        $sha1 = sha1($key . "." . $soc . "." . $uid . "." . $tme);
        if ($tkn === $sha1) {
            $ttoken = $tme + $ldias;
            if ($ttoken > $time) {
                return 102;
            } else {
                return 103;
            }
        } else {
            return 100;
        }
    }

}
