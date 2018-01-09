<?php

return [
    'oracle' => [
        'driver'   => 'oracle',
        'tns'      => env('DB_TNS', ''),    
        'host'     => env('DB_HOST', 'localhost'),
        'port'     => env('DB_PORT', '1521'),
        'database' => env('DB_DATABASE', 'xe'),
        'username' => env('DB_USERNAME', 'hr'),
        'password' => env('DB_PASSWORD', 'hr'),
        'charset'  => 'AL32UTF8',
        'prefix'   => '',
    ],
];
