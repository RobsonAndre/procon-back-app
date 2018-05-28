
<div class="row">
    <div class="col">
        <h5 class="purple-text text-darken-4"><u>Usuário Redefinir Senha</u></h5>
        <div class="row">
            <div class="col" style="font-size:24px">
                <span class="orange-text" style="padding-right:10px;">GET</span> <span class="teal-text">/senha/?action={<span class="red-text">action</span>}&amp;email={<span class="red-text">email</span>}</span>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span class="teal-text" style="padding-right:10px;">OU</span> 
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:24px">
                <span class="orange-text" style="padding-right:10px;">GET</span> <span class="teal-text">/senha/?action={<span class="red-text">action</span>}&amp;cpf={<span class="red-text">cpf</span>}</span>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Parametros:</span><br />
                <div style="padding-left:25px;">
                    action [inteiro]: 1<br />
                    email [email]: user@user.com<br />
                    cpf [inteiro]: 01234567890 (11 digitos)<br />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Uso:</span><br />
                <div style="padding-left:25px;">
                    <a href="http://papiroweb.com.br/integra/senha/?action=1&email=user@email.com&" target="_blank">http://papiroweb.com.br/integra/senha/?action=1&amp;email=user@email.com&amp;</a>
                    <br />ou<br />
                    <a href="http://papiroweb.com.br/integra/senha/?action=1&cpf=01234567890&" target="_blank">http://papiroweb.com.br/integra/senha/?action=1&amp;cpf=01234567890&amp;</a>
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
