<?php
include("../config/config.php");

if ($action == 1) {
    include("./listar.php");
} else if ($action == 2) {
    include("./ler.php");
} else {
    $output = $msg[101];
}
echo json_encode($output,true);
