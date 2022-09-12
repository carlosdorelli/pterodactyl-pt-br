<?php

return [
    'location' => [
        'no_location_found' => 'Não foi possível localizar um registro correspondente ao código curto fornecido.',
        'ask_short' => 'Código curto de localização',
        'ask_long' => 'Descrição do local',
        'created' => 'Criado com sucesso um novo local (:name) com um ID de :id.',
        'deleted' => 'Excluído com sucesso o local solicitado.',
    ],
    'user' => [
        'search_users' => 'Digite um nome de usuário, ID de usuário ou endereço de e-mail',
        'select_search_user' => 'ID do usuário a ser excluído (Digite \'0\' para pesquisar novamente)',
        'deleted' => 'Usuário deletado com sucesso do Painel.',
        'confirm_delete' => 'Tem certeza que deseja excluir este usuário do Painel?',
        'no_users_found' => 'Nenhum usuário foi encontrado para o termo de pesquisa fornecido.',
        'multiple_found' => 'Múltiplas contas foram encontradas para o usuário fornecido, não foi possível excluir um usuário devido ao sinalizador --no-interaction.',
        'ask_admin' => 'Este usuário é um administrador?',
        'ask_email' => 'Endereço de e-mail',
        'ask_username' => 'Nome de usuário',
        'ask_name_first' => 'Nome',
        'ask_name_last' => 'Sobrenome',
        'ask_password' => 'Senha',
        'ask_password_tip' => 'Se você quiser criar uma conta com uma senha aleatória enviada por e-mail para o usuário, execute novamente este comando (CTRL+C) e passe o sinalizador `--no-password`.',
        'ask_password_help' => 'As senhas devem ter pelo menos 8 caracteres e conter pelo menos uma letra maiúscula e um número.',
        '2fa_help_text' => [
            'Este comando desabilitará a autenticação de 2 fatores para a conta de um usuário se estiver habilitado. Isso só deve ser usado como um comando de recuperação de conta se o usuário estiver bloqueado em sua conta.',
            'Se isso não é o que você queria fazer, pressione CTRL+C para sair deste processo.',
        ],
        '2fa_disabled' => 'A autenticação de 2 fatores foi desabilitada para :email.',
    ],
    'schedule' => [
        'output_line' => 'Enviando job para primeira tarefa em `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Excluindo arquivo de backup de serviço :file.',
    ],
    'server' => [
        'rebuild_failed' => 'A solicitação de reconstrução para ":name" (#:id) no nó ":node" falhou com o erro: :message',
        'reinstalar' => [
            'failed' => 'A solicitação de reinstalação para ":name" (#:id) no nó ":node" falhou com o erro: :message',
            'confirm' => 'Você está prestes a reinstalar contra um grupo de servidores. Você deseja continuar?',
        ],
        'power' => [
            'confirm' => 'Você está prestes a executar uma :action contra :count servidores. Você deseja continuar?',
            'action_failed' => 'Solicitação de ação de energia para ":name" (#:id) no nó ":node" falhou com erro: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Host SMTP (por exemplo, smtp.gmail.com)',
            'ask_smtp_port' => 'Porta SMTP',
            'ask_smtp_username' => 'Nome de usuário SMTP',
            'ask_smtp_password' => 'Senha SMTP',
            'ask_mailgun_domain' => 'Domínio Mailgun',
            'ask_mailgun_endpoint' => 'Ponto de extremidade do Mailgun',
            'ask_mailgun_secret' => 'Segredo da Arma de Correio',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Chave da API do Postmark',
            'ask_driver' => 'Qual driver deve ser usado para enviar e-mails?',
            'ask_mail_from' => 'Os e-mails de endereços de e-mail devem ser originários de',
            'ask_mail_name' => 'Nome do qual os emails devem aparecer',
            'ask_encryption' => 'Método de criptografia a ser usado',
        ],
    ],
];
