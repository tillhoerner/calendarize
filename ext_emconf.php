<?php

/**
 * $EM_CONF.
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Calendarize - Event Management',
    'description' => 'Create a structure for timely controlled tables (e.g. events) and one plugin for the different output of calendar views (list, detail, month, year, day, week...). The extension is shipped with one default event table, but you can also "calendarize" your own table/model. It is completely independent and configurable! Use your own models as event items in this calender. Development on https://github.com/lochmueller/calendarize',
    'category' => 'fe',
    'version' => '8.2.2',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Tim Lochmüller',
    'author_email' => 'tim@fruit-lab.de',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.12-10.4.99',
            'php' => '7.2.0-7.4.99',
            'autoloader' => '7.1.0-7.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HDNET\\Calendarize\\' => 'Classes/',
            'JMBTechnologyLimited\\ICalDissect\\' => 'Resources/Private/Php/ICalDissect/src/JMBTechnologyLimited/ICalDissect/',
        ],
    ],
];
