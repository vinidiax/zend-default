<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [

   'db' => [
        'driver'   => 'Mysqli',
        'hostname' => 'mysql.vinidiax.kinghost.net',
        'username' => 'vinidiax',
        'password' => 'adere134',
        'database' => 'vinidiax',
    ]
];
