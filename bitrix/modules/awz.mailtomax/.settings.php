<?php
return [
    'controllers' => [
        'value' => [
            'namespaces' => [
                '\\Awz\\Mailtomax\\Controller' => 'api'
            ]
        ],
        'readonly' => true
    ],
    'ui.entity-selector' => [
        'value' => [
            'entities' => [
                [
                    'entityId' => 'awzmailtomax-user',
                    'provider' => [
                        'moduleId' => 'awz.mailtomax',
                        'className' => '\\Awz\\Mailtomax\\Access\\EntitySelectors\\User'
                    ],
                ],
                [
                    'entityId' => 'awzmailtomax-group',
                    'provider' => [
                        'moduleId' => 'awz.mailtomax',
                        'className' => '\\Awz\\Mailtomax\\Access\\EntitySelectors\\Group'
                    ],
                ],
            ]
        ],
        'readonly' => true,
    ]
];