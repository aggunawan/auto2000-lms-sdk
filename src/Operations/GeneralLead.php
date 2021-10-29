<?php

namespace Aggunawan\Auto2000LMS\Operations;

use Aggunawan\Auto2000LMS\Exceptions\InvalidLead;
use Aggunawan\Auto2000LMS\Interfaces\LeadRequestInterface;
use Aggunawan\Auto2000LMS\Objects\Lead;
use Aggunawan\Auto2000LMS\Objects\LeadResponse;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeneralLead
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function createLead(LeadRequestInterface $lead): ?LeadResponse
    {
        try {
            $payload = $this->leadsToArray($lead);

            if (is_array($payload)) {
                $res = $this->httpClient->request(
                    'POST',
                    '/api_gateway/astra-api-developer/lmsutt/apilmsutt/lead/GeneralCreateLeadsV3',
                    ['json' => $payload]
                )->toArray();

                $response = new LeadResponse();

                if ($res['status'] == 'Success') {
                    $response->setLeads($lead)
                        ->setMessage($res['message'])
                        ->setStatus($res['status']);
                }

                return $response;
            }
        } catch (
            TransportExceptionInterface |
            ClientExceptionInterface |
            DecodingExceptionInterface |
            RedirectionExceptionInterface |
            ServerExceptionInterface $ex
        ) {}

        return null;
    }

    public function isValidLead(Lead $lead): bool
    {
        try {
            $lead->customerName() &&
            $lead->customerPhone() &&
            $lead->leadCreationTime() &&
            $lead->leadPreferredDate() &&
            $lead->leadProspectVariant() &&
            $lead->leadBusinessAreaCode() &&
            $lead->leadSourceCategoryCode() &&
            $lead->leadStatus() &&
            $lead->sourceCode() &&
            $lead->companyCode() &&
            $lead->userGroup();

            return true;
        } catch (InvalidLead $e) {
            return false;
        }
    }

    protected function leadsToArray(LeadRequestInterface $lead): ?array
    {
        try {
            return [
                "AssignmentUserGroup" => $lead->userGroup(),
                "datas" => [
                    [
                        "Title" => $lead->customerTitle(),
                        "Name1" => $lead->customerName(),
                        "Phone1" => $lead->customerPhone(),
                        "Email1" => $lead->customerEmail(),
                        "Address1" => $lead->customerAddress(),
                        "AreaCode" => $lead->leadAreaCode(),
                        "CityCode" => $lead->leadCityCode(),
                        "PreferredDateToContacted" => $lead->leadPreferredDate()->toDateTimeLocalString(),
                        "ProspectVariant" => $lead->leadProspectVariant(),
                        "Notes1" => $lead->leadNote(),
                        "Program" => $lead->leadProgram(),
                        "BusinessAreaCode" => $lead->leadBusinessAreaCode(),
                        "SalesmanNo" => $lead->leadSalesmanNumber(),
                        "SourceCreatedTime" => $lead->leadCreationTime()->toDateTimeLocalString(),
                        "SourceSystemNo" => $lead->sourceSystemNumber(),
                        "SourceSystem" => $lead->sourceSystem(),
                        "SourceCategoryCode" => $lead->leadSourceCategoryCode(),
                        "SourceCode" => $lead->sourceCode(),
                        "CompanyCodeCode" => $lead->companyCode(),
                        "Status" => $lead->leadStatus(),
                        "UserGroup" => $lead->userGroup(),
                    ]
                ]
            ];
        } catch (InvalidLead $e) {}

        return null;
    }
}