<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'handle_all_throwables' => true,
    'php_errors' => ['log' => true],
    'validation' => [
        'mapping' => [
            'paths' => [
                '%kernel.project_dir%/Fixtures/TestBundle/Resources/config/validation_mapping/files',
                '%kernel.project_dir%/Fixtures/TestBundle/Resources/config/validation_mapping/validation.yml',
                '%kernel.project_dir%/Fixtures/TestBundle/Resources/config/validation_mapping/validation.yaml',
            ],
        ],
    ],
]);
