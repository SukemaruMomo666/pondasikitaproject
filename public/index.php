<?php

use Illuminate\Http\Request;

// Tambahkan kode ini:
$_SERVER['REQUEST_URI'] = str_replace('/pondasikita', '', $_SERVER['REQUEST_URI']);

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Auto Loader...
require __DIR__.'/../vendor/autoload.php';

// Run The Application...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
