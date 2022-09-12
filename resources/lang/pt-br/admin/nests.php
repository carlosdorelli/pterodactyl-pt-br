<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Um novo ninho, :name, foi criado com sucesso.',
        'deleted' => 'Excluído com sucesso o ninho solicitado do Painel.',
        'updated' => 'Atualizou com sucesso as opções de configuração do ninho.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importou com sucesso este ovo e suas variáveis associadas.',
            'updated_via_import' => 'Este ovo foi atualizado usando o arquivo fornecido.',
            'deleted' => 'Excluiu com sucesso o ovo solicitado do Painel.',
            'updated' => 'A configuração do ovo foi atualizada com sucesso.',
            'script_updated' => 'O script de instalação do Egg foi atualizado e será executado sempre que os servidores forem instalados.',
            'egg_created' => 'Um novo ovo foi colocado com sucesso. Você precisará reiniciar todos os daemons em execução para aplicar este novo ovo.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'A variável ":variable" foi deletada e não estará mais disponível para os servidores após a reconstrução.',
            'variable_updated' => 'A variável ":variable" foi atualizada. Você precisará reconstruir todos os servidores usando esta variável para aplicar as alterações.',
            'variable_created' => 'Nova variável foi criada com sucesso e atribuída a este ovo.',
        ],
    ],
];
