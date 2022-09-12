<?php

return [
    'email' => [
        'title' => 'Atualize seu e-mail',
        'updated' => 'Seu endereço de e-mail foi atualizado.',
    ],
    'password' => [
        'title' => 'Alterar sua senha',
        'requirements' => 'Sua nova senha deve ter pelo menos 8 caracteres.',
        'updated' => 'Sua senha foi atualizada.',
    ],
    'two_factor' => [
        'button' => 'Configurar autenticação de 2 fatores',
        'disabled' => 'A autenticação de dois fatores foi desabilitada em sua conta. Você não será mais solicitado a fornecer um token ao fazer login.',
        'enabled' => 'A autenticação de dois fatores foi habilitada em sua conta! A partir de agora, ao fazer login, você deverá fornecer o código gerado pelo seu dispositivo.',
        'invalid' => 'O token fornecido era inválido.',
        'setup' => [
            'title' => 'Configurar autenticação de dois fatores',
            'help' => 'Não consegue escanear o código? Insira o código abaixo em seu aplicativo:',
            'field' => 'Digite o token',
        ],
        'disable' => [
            'title' => 'Desabilitar autenticação de dois fatores',
            'field' => 'Digite o token',
        ],
    ],
];
