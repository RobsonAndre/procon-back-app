<?php

function caracterEspecial($str){
    
    $especiais = array('/','@', '[','(',')',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<',']','/');
    for($i=0; $i < count($especiais); $i++){
      if(strpos($str,$especiais[$i])!==false){
          return true;
      }  
    }
    return false;
}