<?php

use Aggunawan\Auto2000LMS\Operations\Authentication;
use Symfony\Component\HttpClient\HttpClient;

require_once('../vendor/autoload.php');

$baseUri = '';
$clientId = '';
$clientSecret = '';

$httpClient = HttpClient::createForBaseUri(
    $baseUri,
    [
        'auth_basic' => [
            $clientId,
            $clientSecret
        ]
    ]
);

$authentication = new Authentication($httpClient);
$token = $authentication->getToken();

var_dump($token);
