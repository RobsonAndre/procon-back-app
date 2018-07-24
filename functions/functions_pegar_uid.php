<?php

function pegarUID($token) {
    $pts = explode('-', base64_decode($token));
    return base64_decode($pts[1]);
}

