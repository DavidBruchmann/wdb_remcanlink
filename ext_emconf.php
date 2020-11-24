<?php

/**
 * Extension Manager/Repository config file for ext "wdb_remcanlink".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Remove Canonical Link',
    'description' => 'Add option on pages to remove a canonical link',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.10-10.4.99',
            'seo'   => '10.4.10-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'WDB\\RemoveCanonicalLink\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'David Bruchmann',
    'author_email' => 'david.bruchmann@gmail.com',
    'author_company' => 'Webdevelopment Barlian',
    'version' => '1.0.0',
];
