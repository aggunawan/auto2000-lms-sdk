<?php

use Aggunawan\Auto2000LMS\Objects\App;
use Aggunawan\Auto2000LMS\Objects\Config;
use Aggunawan\Auto2000LMS\Objects\HttpClient;
use Aggunawan\Auto2000LMS\Objects\Lead;
use Aggunawan\Auto2000LMS\Operations\GeneralLead;
use Carbon\Carbon;

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

$ops = new GeneralLead($httpClient->getBearerClient());
$lead = $ops->createLead(
    (new Lead())
        ->setCustomerName('')
        ->setCustomerPhone('')
        ->setLeadCreationTime(Carbon::now())
        ->setLeadPreferredDate(Carbon::yesterday())
        ->setLeadProspectVariant('')
        ->setLeadBusinessAreaCode('')
        ->setLeadSourceCategoryCode('')
        ->setLeadStatus(0)
        ->setSourceCode('')
        ->setCompanyCode('')
        ->setUserGroup('')
);

var_dump($lead);
