<?php

use Symfony\Component\HttpFoundation\Response;

require __DIR__.'/../bootstrap.php';

$messages = [
    "L'elenco utenti è mancante.",
    "Dati mancanti.",
];

$users = $db->fetchAllAssociative('SELECT * FROM users');

$params = [
    'page_title' => 'Broken app - stage 2',
    'users'      => $users,
    'messages'   => $messages,
];

$response = new Response();
$response->setContent($twig->render('base.twig', $params));
$response->setStatusCode(Response::HTTP_OK);
$response->headers->set('Content-Type', 'text/html');
$response->send();
