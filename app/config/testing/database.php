<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => 'file',

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'dump' => [
            'driver'   => 'sqlite',
            'database' => __DIR__.'/../../database/testing/dump.sqlite',
            'prefix'   => '',
        ],

        'file' => [
            'driver'   => 'sqlite',
            'database' => __DIR__.'/../../database/testing/testing.sqlite',
            'prefix'   => '',
        ],

        'memory' => [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ],

        'mysqltest' => [
            'driver'    => 'mysql',
            'host'      => 'mysqltest',
            'port'      => 3306,
            'database'  => 'seeds',
            'username'  => 'root',
            'password'  => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

    ],
    
];
