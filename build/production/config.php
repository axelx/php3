<?php

return [
    'domain_name'=>'{{domain}}',
    'build'=>'{{build}}',
    'db' => [
            'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'user' => '{{db.user}}',
            'password' => '{{db.password}}',
            'dbname' => '{{db.name}}'
        ]


    ],
];