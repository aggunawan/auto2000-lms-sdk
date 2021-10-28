<?php

namespace Aggunawan\Auto2000LMS\Objects;

use Aggunawan\Auto2000LMS\Interfaces\ConfigInterface;

class Config implements ConfigInterface
{
    private string $baseUrl;

    public function auto2000BaseUrl(): string
    {
        return $this->baseUrl ?? '';
    }

    public function setBaseUrl(string $baseUrl): Config
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }
}