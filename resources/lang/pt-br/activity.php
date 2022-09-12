<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Falha ao logar',
        'sucesso' => 'Logado',
        'password-reset' => 'Password-reset',
        'reset-password' => 'Redefinição de senha solicitada',
        'checkpoint' => 'Autenticação de dois fatores solicitada',
        'recovery-token' => 'Token de recuperação de dois fatores usado',
        'token' => 'Resolvido desafio de dois fatores',
        'ip-blocked' => 'Solicitação bloqueada de endereço IP não listado para :identifier',
        'sftp' => [
            'fail' => 'Falha no login SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-mail alterado de :old para :new',
            'senha alterada' => 'Senha alterada',
        ],
        'api-key' => [
            'create' => 'Criada nova chave de API :identifier',
            'delete' => 'Chave de API excluída :identifier',
        ],
        'ssh-key' => [
            'create' => 'Chave SSH adicionada :fingerprint à conta',
            'delete' => 'Chave SSH removida :fingerprint da conta',
        ],
        'two-factor' => [
            'create' => 'Autenticação de dois fatores habilitada',
            'delete' => 'Autenticação de dois fatores desabilitada',
        ],
    ],
    'server' => [
        'reinstall' => 'Servidor reinstalado',
        'console' => [
            'command' => 'Executado ":command" no servidor',
        ],
        'power' => [
            'start' => 'Iniciou o servidor',
            'stop' => 'Interrompeu o servidor',
            'restart' => 'Reiniciado o servidor',
            'kill' => 'Eliminou o processo do servidor',
        ],
        'backup' => [
            'download' => 'Baixou o backup de :name',
            'delete' => 'Excluiu o backup de :name',
            'restore' => 'Restaurado o backup de :name (arquivos excluídos: :truncate)',
            'restore-complete' => 'Restauração concluída do :name backup',
            'restore-failed' => 'Falha ao completar a restauração do backup :name',
            'start' => 'Iniciou um novo backup :name',
            'complete' => 'Marcou o backup :name como completo',
            'fail' => 'Marcou o backup :name como falhado',
            'lock' => 'Bloqueou o backup :name',
            'unlock' => 'Desbloqueou o backup de :name',
        ],
        'database' => [
            'create' => 'Criado novo banco de dados :name',
            'rotate-password' => 'Password girada para banco de dados :name',
            'delete' => 'Banco de dados excluído :name',
        ],
        'file' => [
            'compress_one' => 'Comprimido :directory:file',
            'compress_other' => 'Contagem de arquivos compactados em :directory',
            'read' => 'Visualizou o conteúdo de :file',
            'copy' => 'Criado uma cópia de :file',
            'create-directory' => 'Diretório criado :directory:name',
            'decompress' => 'Descompactado :files em :directory',
            'delete_one' => 'Excluído :directory:files.0',
            'delete_other' => 'Excluído :count arquivos em :directory',
            'download' => 'Baixado :file',
            'pull' => 'Baixou um arquivo remoto de :url para :directory',
            'rename_one' => 'Renomeado :directory:files.0.from para :directory:files.0.to',
            'rename_other' => 'Renomeado :count arquivos em :directory',
            'write' => 'Escreveu novo conteúdo para :file',
            'upload' => 'Iniciou um upload de arquivo',
            'uploaded' => 'Enviado:directory:file',
        ],
        'sftp' => [
            'denied' => 'Blocked SFTP access due to permissions',
            'create_one' => 'Created :files.0',
            'create_other' => 'Created :count new files',
            'write_one' => 'Modified the contents of :files.0',
            'write_other' => 'Modified the contents of :count files',
            'delete_one' => 'Deleted :files.0',
            'delete_other' => 'Deleted :count files',
            'create-directory_one' => 'Created the :files.0 directory',
            'create-directory_other' => 'Created :count directories',
            'rename_one' => 'Renamed :files.0.from to :files.0.to',
            'rename_other' => 'Renamed or moved :count files',
        ],
        'allocation' => [
            'create' => 'Adicionado :allocation ao servidor',
            'notes' => 'Atualizou as notas para :allocation de ":old" para ":new"',
            'primary' => 'Definir :allocation como a alocação do servidor primário',
            'delete' => 'Excluiu a :allocation de alocação',
        ],
        'schedule' => [
            'create' => 'Criado o agendamento :name',
            'update' => 'Atualizou a agenda de :name',
            'execute' => 'Executado manualmente o agendamento :name',
            'delete' => 'Deletado o agendamento :name',
        ],
        'task' => [
            'create' => 'Criada uma nova tarefa ":action" para a agenda :name',
            'update' => 'Atualizou a tarefa ":action" para a agenda :name',
            'delete' => 'Excluiu uma tarefa para a agenda :name',
        ],
        'settings' => [
            'rename' => 'Renomeou o servidor de :old para :new',
        ],
        'startup' => [
            'edit' => 'Mudada a variável :variable de ":old" para ":new"',
            'image' => 'Atualizou a imagem do Docker para o servidor de :old para :new',
        ],
        'subuser' => [
            'create' => 'Adicionado :email como subusuário',
            'update' => 'Atualizou as permissões de subusuário para :email',
            'delete' => 'Removido :email como subusuário',
        ],
    ],
];
