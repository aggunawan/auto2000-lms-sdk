<?php

use Aggunawan\Auto2000LMS\Objects\Lead;
use Aggunawan\Auto2000LMS\Operations\GeneralLead;
use Carbon\Carbon;
use Symfony\Component\HttpClient\HttpClient;

require_once('../vendor/autoload.php');

$baseUri = '';
$accessToken = '';

$httpClient = HttpClient::createForBaseUri(
    $baseUri,
    [
        'auth_bearer' => $accessToken
    ]
);

$ops = new GeneralLead($httpClient);
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
