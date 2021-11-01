<?php

use Aggunawan\Auto2000LMS\Objects\App;
use Aggunawan\Auto2000LMS\Objects\Config;
use Aggunawan\Auto2000LMS\Objects\HttpClient;
use Aggunawan\Auto2000LMS\Operations\Authentication;

require_once('../vendor/autoload.php');

$baseUri = '';
$clientId = '';
$clientSecret = '';

$httpClient = new HttpClient(
    (new Config())->setBaseUrl($baseUri),
    (new App())
        ->setClientId($clientId)
        ->setClientSecret($clientSecret)
);

$authentication = new Authentication($httpClient->getBasicClient());
$token = $authentication->getToken();

var_dump($token);
