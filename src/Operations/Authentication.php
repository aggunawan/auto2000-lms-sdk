<?php

namespace Aggunawan\Auto2000LMS\Operations;

use Aggunawan\Auto2000LMS\Objects\Token;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Authentication
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getToken(): ?Token
    {
        $token = new Token();

        try {
            $res = $this->httpClient->request(
                'POST',
                '/api_gateway/astra-api-developer/astra-auth/oauth2/token',
                [
                    'body' => [
                        'grant_type' => 'client_credentials',
                        'scope' => $token->getScope()
                    ]
                ]
            );

            $arr = $res->toArray(false);

            $token->setExpiresIn($arr['expires_in']);
            $token->setAccessToken($arr['access_token']);

            return $token;
        } catch (
            TransportExceptionInterface |
            ClientExceptionInterface |
            DecodingExceptionInterface |
            RedirectionExceptionInterface |
            ServerExceptionInterface $e
        ) {}

        return null;
    }
}