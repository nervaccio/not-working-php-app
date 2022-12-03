<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/vendor/autoload.php';

/**
 * Template system
 */
$twig = new \Twig\Environment(
    new \Twig\Loader\FilesystemLoader(__DIR__.'/templates'),
    []
);

/**
 * Database configuration
 */
$connectionParams = [
    'path'   => __DIR__.'/app.db',
    'driver' => 'sqlite3',
];

$db = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

/**
 * Request information
 */
$request = Request::createFromGlobals();
