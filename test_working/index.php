<?php

use Symfony\Component\HttpFoundation\Response;

require __DIR__.'/../bootstrap.php';

$users = $db->fetchAllAssociative('SELECT * FROM user');

$params = [
    'page_title' => 'Controllo funzionamento',
    'users'      => $users,
];

$response = new Response();
$response->setContent($twig->render('test_working-index.twig', $params));
$response->setStatusCode(Response::HTTP_OK);
$response->headers->set('Content-Type', 'text/html');
$response->send();
