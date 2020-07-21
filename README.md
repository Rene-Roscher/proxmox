Proxmox Laravel Bindings | Updated by InFeCtedEv | For Laravel 7.*
=======

This package is a wrapper for the ProxmoxVE package made by
ZzAntares (https://github.com/zzantares/proxmoxve). This package
allows easy use of the ProxmoxVE package by adding a
facade, and a config file.

Update
------

Updated for Laravel 5.5 by Rushore

License
------
This package is released under the LGPL. (Read LICENSE)

Tl;dr; you can use it in a proprietary project, but if you modify the actual
library, you need to make your changes open source under the LGPL.


Installation
-----
Add the package `Rushore/proxmox` to your composer.json

    $ composer require Rushore/proxmox 1.*

or

    {
        "require": {
            "Rushore/proxmox": "1.*"
        }
    }

Add the service provider and alias to your app.php

    'providers' => [
        // ...
        'Someguy123\Proxmox\ProxmoxServiceProvider',
        // ...
    ]

    'aliases' => [
        // ...
        'Proxmox'         => 'Someguy123\Proxmox\ProxmoxFacade',
        // ...
    ]

Fill in `app/config/packages/Rushore/proxmox/server.php`
or `config/packages/Rushore/proxmox/server.php` depending on your Laravel
version. This file contains the Proxmox API connection information, and must
be filled in before use. (you can also fill in the details in your environment
file)


Usage
-----

Refer to [the original package](https://github.com/zzantares/proxmoxve) for
documentation. Instead of `$proxmox->`, use `Proxmox::`

Example:

    $allnodes = Proxmox::get('/nodes');
    dd($allnodes);
