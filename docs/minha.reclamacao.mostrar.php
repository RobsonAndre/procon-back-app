<div class="row">
	<div class="col">
        <h5 class="purple-text text-darken-4"><u>Reclama&ccedil;&atilde;o - Minha Reclamação Mostrar</u></h5>
        <div class="row">
            <div class="col" style="font-size:24px">
                <span class="orange-text" style="padding-right:10px;">GET</span> <span class="teal-text">/login/?action={<span class="red-text">action</span>}&amp;token={<span class="red-text">token</span>}&amp;reclamacao={<span class="red-text">uid</span>}</span>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Parametros:</span><br />
                <div style="padding-left:25px;">
                action [inteiro]: 5<br />
                token [string]: token valido<br />
                reclamacao [inteiro]: 1 (uid - primary key)<br />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Uso:</span><br />
                <div style="padding-left:25px;">
                <a href="http://papiroweb.com.br/integra/reclamacoes/?action=5&token=<token_valido>&reclamacao=1&" target="_blank">http://papiroweb.com.br/integra/reclamacoes/?action=5&amp;token=&lt;token_valido&gt;&amp;reclamacao=1</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Mensagens:</span><br />
                <div style="padding-left:25px;">
                    <a href="./msg.php?m=218&" target="_blank">218 - Sucesso</a><br />
                    <a href="./msg.php?m=219&" target="_blank">219 - Erro</a><br />
                </div>
            </div>
        </div>
    </div>
</div>