<?php

declare(strict_types=1);

use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;

$http = new Server('', 8080);

$http->on(
    'start',
    function (Server $http) {
        echo "Orang-IT sedang mencoba Swoole :)\n";
    }
);
$http->on(
    'request',
    function (Request $request, Response $response) {
        $response->end("<b>Halo teman-teman, saya dijalankan dari Swoole</b>\n");
    }
);

$http->start();
