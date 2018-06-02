<?php
include("../config/config.php");

if ($action == 1) {
    include("./ler.php");
} else {
    $output = $msg[101];
}
echo json_encode($output);
