<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Schema.org extension for health and lifesciences',
    'description' => 'Extend the schema extension with health-related terms',
    'category' => 'fe',
    'state' => 'stable',
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '1.1.0-dev',
    'constraints' => [
        'depends' => [
            'schema' => '1.7.0-1.99.99',
            'typo3' => '9.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaHealth\\' => 'Classes']
    ],
];
