
<div class="row">
    <div class="col">
        <h5 class="purple-text text-darken-4"><u>Usuário Trocar Senha</u></h5>
        <div class="row">
            <div class="col" style="font-size:24px">
                <span class="orange-text" style="padding-right:10px;">GET</span> <span class="teal-text">/senha/?action={<span class="red-text">action</span>}&amp;token={<span class="red-text">token</span>}&amp;email={<span class="red-text">email</span>}&amp;senha={<span class="red-text">senha</span>}&amp;nsenha={<span class="red-text">nsenha</span>}</span>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Parametros:</span><br />
                <div style="padding-left:25px;">
                    action [inteiro]: 2<br />
                    email [email]: user@user.com<br />
                    token [string]: token valido<br />
                    senha [string]: senha@123 (8 a 15 caracter alfanumerico com ou sem caracteres especiais)<br />
                    nsenha [string]: novasenha@321 (8 a 15 caracter alfanumerico com ou sem caracteres especiais)<br />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Uso:</span><br />
                <div style="padding-left:25px;">
                    <a href="http://papiroweb.com.br/integra/senha/?action=2&token=<token_valido>&email=user@email.com&senha=senha@123&nsenha=novasenha@321&" target="_blank">http://papiroweb.com.br/integra/senha/?action=2&amp;token=&lt;token_valido&gt;&amp;senha=senha@123&amp;nsenha=novasenha@321</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Mensagens:</span><br />
                <div style="padding-left:25px;">
                    <a href="./msg.php?m=130&" target="_blank">130 - Sucesso</a><br />
                    <a href="./msg.php?m=131&" target="_blank">131 - Erro</a><br />
                </div>
            </div>
        </div>
    </div
