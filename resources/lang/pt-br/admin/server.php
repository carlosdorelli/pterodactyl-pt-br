<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Você está tentando excluir a alocação padrão para este servidor, mas não há alocação de fallback para usar.',
        'marked_as_failed' => 'Este servidor foi marcado como tendo falhado em uma instalação anterior. O status atual não pode ser alternado neste estado.',
        'bad_variable' => 'Ocorreu um erro de validação com a variável :name.',
        'daemon_exception' => 'Houve uma exceção ao tentar se comunicar com o daemon resultando em um código de resposta HTTP/:code. Esta exceção foi registrada. (ID da solicitação: :request_id)',
        'default_allocation_not_found' => 'A alocação padrão solicitada não foi encontrada nas alocações deste servidor.',
    ],
    'alerts' => [
        'startup_changed' => 'A configuração de inicialização para este servidor foi atualizada. Se o ninho ou ovo deste servidor foi alterado, uma reinstalação ocorrerá agora.',
        'server_deleted' => 'O servidor foi excluído com sucesso do sistema.',
        'server_created' => 'Servidor criado com sucesso no painel. Por favor, aguarde alguns minutos para que o daemon instale completamente este servidor.',
        'build_updated' => 'Os detalhes de compilação para este servidor foram atualizados. Algumas alterações podem exigir uma reinicialização para entrar em vigor.',
        'suspension_toggled' => 'O status da suspensão do servidor foi alterado para :status.',
        'rebuild_on_boot' => 'Este servidor foi marcado como exigindo uma reconstrução do Docker Container. Isso acontecerá na próxima vez que o servidor for iniciado.',
        'install_toggled' => 'O status de instalação para este servidor foi alternado.',
        'server_reinstalled' => 'Este servidor foi colocado na fila para reinstalação começando agora.',
        'details_updated' => 'Os detalhes do servidor foram atualizados com sucesso.',
        'docker_image_updated' => 'Alterou com sucesso a imagem padrão do Docker para usar neste servidor. Uma reinicialização é necessária para aplicar essa alteração.',
        'node_required' => 'Você deve ter pelo menos um Node configurado antes de poder adicionar um servidor a este painel.',
        'transfer_nodes_required' => 'Você deve ter pelo menos dois Nodes configurados antes de poder transferir servidores.',
        'transfer_started' => 'A transferência do servidor foi iniciada.',
        'transfer_not_viable' => 'O Node que você selecionou não tem o espaço em disco necessário ou memória disponível para acomodar este servidor.',
    ],
];
