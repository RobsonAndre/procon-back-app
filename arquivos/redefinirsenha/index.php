<?php
include("../config/config.php");

/* echo '<br />'. */ $form   = false;
/* echo '<br />'. */ $limite = (60 * 60); //1h
/* echo '<br />'. */ $agora  = time();

/* echo '<br />'. */ $email = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
/* echo '<br />'. */ $tk    = filter_input(INPUT_GET, 'token', FILTER_SANITIZE_STRING);
$token = explode('-', base64_decode($tk));
/** /
    echo '<pre>';
    print_r($token);
    echo '</pre>';
/* */
/* echo '<br />'. */ $time = base64_decode($token[0]);
/* echo '<br />'. */ $uid = base64_decode($token[1]);
/* echo '<br />'. */ sha1($email);
/* echo '<br />'. */ $codEmail = $token[2];

//verificando se o token e valido
if ($time + $limite > $agora) {
    //echo "<br> Token dentro do tempo!";
    //verificando se o email e o token sao iguais
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);

    //Verificando se o email esta cadastrado
    /* echo '<br />'. */$s = "SELECT uid FROM " . PFIX . "user_login WHERE email='$email' ";

    $r = $Qry->query($s);
    $l = $Qry->rows($r);

    if ($l == 1) {
        $arr = $Qry->arr($r);
        //echo "<br> O e-mail existe!";
        if ($uid == $arr[0]['uid']) {
            //echo "<br />Uid ok!";
            $form = true;
        } else {
            echo "<br />Uid não correponde ao email";
        }
    } else {
        echo "<br />E-mail não cadastrado";
    }
} else {
    echo "<br> Token expirou!";
}

if ($form) {
    ?>
    <form action="./redefinir.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    Redefinr senha para: <?= $email ?>
                </td>
            </tr>

            <tr>
                <td>
                    senha:
                </td>
                <td>
                    <input name="senha" type="password" />
                </td>
            </tr>
            <tr>
                <td>
                    senha repetir:
                </td>
                <td>
                    <input name="repetir" type="password" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input name="token" type="hidden" value="<?= $tk ?>" />
                    <input name="email" type="hidden" value="<?= $email ?>" />
                    <input type="submit" value="Redefinir a senha" />
                </td>
            </tr>

        </table>	
    </form>
    <?php
}
?>