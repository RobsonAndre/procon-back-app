<?php

//Sistema
$msg[100] = array('status_code' => 100, 'status_message' => 'Usuário não autenticado.', 'success' => false);
$msg[101] = array('status_code' => 101, 'status_message' => 'Ação desconhecida.', 'success' => false);
$msg[102] = array('status_code' => 102, 'status_message' => 'Token Ok.', 'success' => true);
$msg[103] = array('status_code' => 103, 'status_message' => 'Token expirou.', 'success' => false);

//Login
$msg[110] = array('status_code' => 110, 'status_message' => 'Autenticação realizada com sucesso.', 'success' => true);
$msg[111] = array('status_code' => 111, 'status_message' => 'Senha incorreta.', 'success' => false);
$msg[112] = array('status_code' => 112, 'status_message' => 'Usuário incorreto ou não cadastrado.', 'success' => false);

//Cadastro
$msg[120] = array('status_code' => 120, 'status_message' => 'Cadastro realizado, você já pode logar no App.', 'success' => true);
$msg[121] = array('status_code' => 121, 'status_message' => 'Cadastro não realizado.', 'success' => false, 'info' => '');
$msg[122] = array('status_code' => 122, 'status_message' => 'Cadastro atualizado com sucesso.', 'success' => true);
$msg[123] = array('status_code' => 123, 'status_message' => 'Cadastro não atualizado.', 'success' => false, 'info' => '');
$msg[124] = array('status_code' => 124, 'status_message' => 'Endereço atualizado com sucesso.', 'success' => true);
$msg[125] = array('status_code' => 125, 'status_message' => 'Endereço não atualizado.', 'success' => false, 'info' => '');
$msg[126] = array('status_code' => 126, 'status_message' => 'Documento atualizado com sucesso.', 'success' => true);
$msg[127] = array('status_code' => 127, 'status_message' => 'Documento não atualizado.', 'success' => false, 'info' => '');
$msg[128] = array('status_code' => 128, 'status_message' => 'Comprovante atualizado com sucesso.', 'success' => true);
$msg[129] = array('status_code' => 129, 'status_message' => 'Comprovante não atualizado.', 'success' => false, 'info' => '');

//Senha redefinir
$msg[130] = array('status_code' => 130, 'status_message' => 'Foi enviado um e-mail para "' . $email . '" com as instruções para redefinir a senha.', 'success' => true);
$msg[131] = array('status_code' => 131, 'status_message' => 'E-mail ou CPF não cadastrado.', 'success' => false);
$msg[132] = array('status_code' => 132, 'status_message' => 'Não foi possível redefinir a senha, tente mais tarde.', 'success' => false);
$msg[133] = array('status_code' => 133, 'status_message' => 'Não foi possível enviar o e-mail, tente mais tarde.', 'success' => false);

//Documento (Termo de Uso ou Politica de Privacidade)
$msg[140] = array('status_code' => 140, 'status_message' => 'Documento "' . $tipo . '" geredo com sucesso.', 'success' => true);
$msg[141] = array('status_code' => 141, 'status_message' => 'Impossivel gerar o documento ' . $tipo . '.', 'success' => false);
$msg[142] = array('status_code' => 142, 'status_message' => 'Lei gerada com sucesso.', 'success' => true);

//Documento (Termo de Uso ou Politica de Privacidade)
$msg[150] = array('status_code' => 150, 'status_message' => 'E-mail enviado com sucesso.', 'success' => true);
$msg[151] = array('status_code' => 151, 'status_message' => 'E-mail em invalido ou em branco.', 'success' => false);
$msg[152] = array('status_code' => 152, 'status_message' => 'Impossivel enviar o e-mail, tente mais tarde.', 'success' => false);

//Documento (Termo de Uso ou Politica de Privacidade)
$msg[160] = array('status_code' => 160, 'status_message' => 'Senha alterada com sucesso.', 'success' => true);
$msg[161] = array('status_code' => 161, 'status_message' => 'Senha atual invalida ou em branco.', 'success' => false);
$msg[162] = array('status_code' => 162, 'status_message' => 'Nova senha atual invalida ou em branco.', 'success' => false);
$msg[163] = array('status_code' => 163, 'status_message' => 'Nova senha n&atilde;o pode ser igual a senha atual.', 'success' => false);

//Leis
$msg[170] = array('status_code' => 170, 'status_message' => 'Lista gerada com sucesso.', 'success' => true);
$msg[171] = array('status_code' => 171, 'status_message' => 'Impossivel gerar a lista de Leis.', 'success' => false);

//UF
$msg[180] = array('status_code' => 180, 'status_message' => 'Lista gerada com sucesso.', 'success' => true);
$msg[181] = array('status_code' => 181, 'status_message' => 'Impossivel gerar a lista de Estados.', 'success' => false);

//Municipios
$msg[190] = array('status_code' => 190, 'status_message' => 'Lista gerada com sucesso.', 'success' => true);
$msg[191] = array('status_code' => 191, 'status_message' => 'Impossivel gerar a lista de Estados.', 'success' => false);

//Estabelecimentos
$msg[200] = array('status_code' => 200, 'status_message' => 'Lista de estabelecimentos gerada.', 'success' => true);
$msg[201] = array('status_code' => 201, 'status_message' => 'Impossível gerar a lista de estabelecimentos.', 'success' => false);

//Reclamacoes
$msg[210] = array('status_code' => 210, 'status_message' => 'Lista de reclamações gerada.', 'success' => true);
$msg[211] = array('status_code' => 211, 'status_message' => 'Impossível gerar a lista de reclamações.', 'success' => false);
$msg[212] = array('status_code' => 212, 'status_message' => 'Reclamações gravada.', 'success' => true);
$msg[213] = array('status_code' => 213, 'status_message' => 'Impossível gravar a reclamação.', 'success' => false);
$msg[214] = array('status_code' => 214, 'status_message' => 'Reclamações contadas.', 'success' => true);
$msg[215] = array('status_code' => 215, 'status_message' => 'Impossível contar as reclamações.', 'success' => false);
$msg[216] = array('status_code' => 216, 'status_message' => 'Reclamações Listadas.', 'success' => true);
$msg[217] = array('status_code' => 217, 'status_message' => 'Impossível listar as reclamações.', 'success' => false);
$msg[218] = array('status_code' => 218, 'status_message' => 'Reclamação encontrada.', 'success' => true);
$msg[219] = array('status_code' => 219, 'status_message' => 'Impossível encontrar a reclamação.', 'success' => false);

//Mensagens
$msg[300] = array('status_code' => 300, 'status_message' => 'Mensagem enviada com sucesso.', 'success' => true);
$msg[301] = array('status_code' => 301, 'status_message' => 'Erro não foi possivel enviar a mensagem.', 'success' => false);
$msg[302] = array('status_code' => 302, 'status_message' => 'Lista de mensagens gerada com sucesso.', 'success' => true);
$msg[303] = array('status_code' => 303, 'status_message' => 'Erro não foi possivel gerar a lista de mensagens.', 'success' => false);
$msg[304] = array('status_code' => 304, 'status_message' => 'Mensagem gerada com sucesso.', 'success' => true);
$msg[305] = array('status_code' => 305, 'status_message' => 'Erro não foi possivel gerar a mensagens.', 'success' => false);
$msg[306] = array('status_code' => 306, 'status_message' => 'Tipos gerado com sucesso.', 'success' => true);
$msg[307] = array('status_code' => 307, 'status_message' => 'Erro não foi possivel gerar os tipos.', 'success' => false);
$msg[308] = array('status_code' => 308, 'status_message' => 'Mensagem apagada com sucesso.', 'success' => true);
$msg[309] = array('status_code' => 309, 'status_message' => 'Erro não foi possivel apagar a mensagem.', 'success' => false);
