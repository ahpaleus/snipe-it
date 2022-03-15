<?php
use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::create(dirname(__DIR__), 'snipe-it/.env.phpstan');
$dotenv->load(__DIR__.'/.env');

?>
