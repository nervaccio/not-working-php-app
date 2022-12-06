<?php

use Symfony\Component\HttpFoundation\Response;

require __DIR__.'/../bootstrap.php';

$messages = [
    "Dati generati con : https://www.fakedata-generator.com",
];

$users = $db->fetchAllAssociative('SELECT * FROM user');

$params = [
    'page_title' => 'Controllo funzionamento',
    'users'      => $users,
    'messages'   => $messages,
];

$response = new Response();
$response->setContent($twig->render('broken_app_test-index.twig', $params));
$response->setStatusCode(Response::HTTP_OK);
$response->headers->set('Content-Type', 'text/html');
$response->send();
