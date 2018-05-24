<div class="row">
	<div class="col">
        <h5 class="purple-text text-darken-4"><u>Reclama&ccedil;&atilde;o - Gravar</u></h5>
        <div class="row">
            <div class="col" style="font-size:24px">
                <span class="orange-text" style="padding-right:10px;">GET</span> <span class="teal-text">/login/?action={<span class="red-text">action</span>}&amp;token={<span class="red-text">token</span>}&amp;estabelecimento={<span class="red-text">uid_do_estabelecimento</span>}&amp;tipo={<span class="red-text">uid_do_tipo</span>}&amp;banco={<span class="red-text">titulo_do_banco</span>}&amp;agencia={<span class="red-text">identificador_da_agencia</span>}&amp;data={<span class="red-text">dd-mm-aaaa</span>}&amp;hora={<span class="red-text">hh-mm-ss</span>}&amp;espera={<span class="red-text">tempo_de_espera</span>}&amp;atendido={<span class="red-text">boolean</span>}&amp;queixa={<span class="red-text">texto_da_queixa</span>}&amp;anexos={<span class="red-text">lista_de_anexos</span>}</span>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Parametros:</span><br />
                <div style="padding-left:25px;">
                action [inteiro]: 2<br />
                token [string]: Bde9e728eb0fb5bec3a0e494317a41612d56457A<br />
                estabelecimento [inteiro]: uid  (ex:1)<br />
                tipo [inteiro]: uid (ex:1)<br />
                banco [string]: nome do banco (ex:Banco do Brasil)<br />
                agencia [string]: numero da agencia (ex:0352-2)<br />
                data [string]: data formato dd-mm-aaaa (ex:12-05-2018)<br />
                hora [string]: hora formato hh-mm-ss (ex:16-45-21)<br />
                espera [inteiro]: tempo de espera na fila em minutos (ex:96)<br />
                atendido [inteiro]: indica se foi (1) ou nao (0) atendido (valores admitidos: 1 ou 0)<br />
                queixa [string]: texto da queixa do usuário (VarChar 512)<br />
                anexos [string]: lista de url dos anexos separados por virgula (ex: http://servidor.com.br/imagem.jpg)<br />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Uso:</span><br />
                <div style="padding-left:25px;">
                <a href="http://papiroweb.com.br/integra/reclamacoes/?action=2&token=Bde9e728eb0fb5bec3a0e494317a41612d56457A&estabelecimento=1&tipo=1&banco=Banco%20do%20Brasil&agencia=0352-2&data=12-05-2018&hora=14-27-16&espera=37&atendido=1&queixa=texto%20que%20deve%20acompanhar%20a%20reclamacao%20do%20usuario%20e%20deve%20ser%20apresentada%20ao%20procon%20para%20apreciacao&anexos=anexo0,anexo1,anexo2,anexo3,anexo4,,anexo6&" target="_blank">http://papiroweb.com.br/integra/reclamacoes/?action=2&amp;token=Bde9e728eb0fb5bec3a0e494317a41612d56457A&amp;estabelecimento=1&amp;tipo=1&amp;banco=Banco%20do%20Brasil&amp;agencia=0352-2&amp;data=12-05-2018&amp;hora=14-27-16&amp;espera=37&amp;atendido=1&amp;queixa=texto%20que%20deve%20acompanhar%20a%20reclamacao%20do%20usuario%20e%20deve%20ser%20apresentada%20ao%20procon%20para%20apreciacao&amp;anexos=anexo0,anexo1,anexo2,anexo3,anexo4,,anexo6</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="font-size:14px">
                <span style="font-size:18px">Mensagens:</span><br />
                <div style="padding-left:25px;">
                    <a href="./msg.php?m=210&" target="_blank">210 - Sucesso</a><br />
                    <a href="./msg.php?m=211&" target="_blank">211 - Erro</a><br />
                </div>
            </div>
        </div>
    </div>
</div>