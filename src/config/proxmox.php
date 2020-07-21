<?php
/*
 * You can either add your details directly in this file,
 * or the safe way is to use an environment file.
 *
 * Read more:
 * http://laravel.com/docs/configuration#protecting-sensitive-configuration
 */

return [
    'server' => [
        'hostname' => env('PROXMOX_HOST'),
        'username' => env('PROXMOX_USER'),
        'password' => env('PROXMOX_PASS'),
        // sensible defaults for these two
        'realm'    => env('PROXMOX_REALM', 'pam'),
        'port'     => env('PROXMOX_PORT', 8006),
    ]
];
