<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'handle_all_throwables' => true,
    'php_errors' => ['log' => true],
    'secret' => 's3cr3t',
    'validation' => [
        'enabled' => true,
        'enable_annotations' => true,
    ],
]);

$container->setAlias('validator.alias', 'validator')->setPublic(true);
