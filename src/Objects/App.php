<?php

namespace Aggunawan\Auto2000LMS\Objects;

use Aggunawan\Auto2000LMS\Interfaces\AppInterface;

class App implements AppInterface
{
    private string $clientId;
    private string $clientSecret;

    public function auto2000ClientId(): string
    {
        return $this->clientId ?? '';
    }

    public function auto2000ClientSecret(): string
    {
        return $this->clientSecret ?? '';
    }

    public function setClientId(string $clientId): App
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function setClientSecret(string $clientSecret): App
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }
}