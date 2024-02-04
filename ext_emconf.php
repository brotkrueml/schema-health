<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Schema.org extension for health and lifesciences',
    'description' => 'Extend the schema extension with health-related terms',
    'category' => 'fe',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '2.2.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-0.0.0',
            'schema' => '3.0.0-3.99.99',
            'typo3' => '11.5.19-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaHealth\\' => 'Classes']
    ],
];
