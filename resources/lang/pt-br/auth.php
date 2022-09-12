<?php

return [
    'sign_in' => 'Entrar',
     'go_to_login' => 'Ir para o Login',
     'failed' => 'Nenhuma conta correspondente a essas credenciais foi encontrada.',

    'forgot_password' => [
        'label' => 'Esqueceu a senha?',
        'label_help' => 'Digite o endereço de e-mail da sua conta para receber instruções sobre como redefinir sua senha.',
        'button' => 'Recuperar conta',
    ],

    'reset_password' => [
        'button' => 'Redefinir e Fazer Login',
    ],

    'two_factor' => [
        'label' => 'Token de 2 fatores',
        'label_help' => 'Esta conta requer uma segunda camada de autenticação para continuar. Por favor, insira o código gerado pelo seu dispositivo para concluir este login.',
        'checkpoint_failed' => 'O token de autenticação de dois fatores era inválido.',
    ],

    'throttle' => 'Muitas tentativas de login. Por favor, tente novamente em :seconds segundos.',
    'password_requirements' => 'A senha deve ter pelo menos 8 caracteres e deve ser exclusiva para este site.',
    '2fa_must_be_enabled' => 'O administrador exigiu que a autenticação de dois fatores seja habilitada para sua conta para usar o painel.',
];
