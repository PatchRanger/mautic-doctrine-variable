<?php
// plugins/DoctrineVariableBundle/Config/config.php

return [
    'name' => 'Doctrine Variable',
    'description' => 'Sets Doctrine session variables.',
    'author' => 'Dmitry Danilson',
    'version' => '1.0.0',
    'services' => [
        'other' => [
            'mautic.doctrine_variable.subscriber' => [
                'class' => 'MauticPlugin\DoctrineVariableBundle\EventListener\DoctrineSubscriber',
                'tag' => 'doctrine.event_subscriber',
            ],
        ],
     ],
];
