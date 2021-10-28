<?php

namespace Aggunawan\Auto2000LMS;

use Aggunawan\Auto2000LMS\Exceptions\InvalidUrlConfig;
use Aggunawan\Auto2000LMS\Interfaces\ConfigInterface;

class Client
{
    private string $baseUrl;

    /**
     * @throws InvalidUrlConfig
     */
    public function __construct(ConfigInterface $config)
    {
        if (!$this->isValidConfig($config->auto2000BaseUrl())) throw new InvalidUrlConfig();
        $this->baseUrl = $config->auto2000BaseUrl();
    }

    public function isValidConfig(string $uri): bool
    {
        return $uri != '';
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): Client
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }
}