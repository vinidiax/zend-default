<?php
return [
        'doctrine' => [
                'connection' => [
                    // default connection name
                        'orm_default' => [
                                'driverClass' => \Doctrine\DBAL\Driver\Mysqli\Driver::class,
                                'params' => [
                                        'host'     => 'mysql.vinidiax.kinghost.net',
                                        'port'     => '3306',
                                        'user'     => 'vinidiax',
                                        'password' => 'testesenha123',
                                        'dbname'   => 'vinidiax',
                                ],
                        ],
                ],
        ],
];
