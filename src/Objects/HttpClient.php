<?php

namespace Aggunawan\Auto2000LMS\Objects;

use Aggunawan\Auto2000LMS\Interfaces\AppInterface;
use Aggunawan\Auto2000LMS\Interfaces\ConfigInterface;
use Aggunawan\Auto2000LMS\Operations\Authentication;
use Symfony\Component\HttpClient\HttpClient as BaseClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpClient
{
    private ConfigInterface $config;
    private AppInterface $app;
    private array $httpOptions = [];

    public function __construct(ConfigInterface $config, AppInterface $app)
    {
        $this->config = $config;
        $this->app = $app;
    }

    public function getBearerClient(): HttpClientInterface
    {
        if (!isset($this->httpOptions['auth_bearer'])) {
            $bearer = $this->fetchToken();
            if (!is_null($bearer)) $this->httpOptions = [ 'auth_bearer' => "$bearer"];
        }

        return $this->getHttpClient();
    }

    public function getBasicClient(): HttpClientInterface
    {
        if ($this->app->auto2000ClientSecret() != "" && $this->app->auto2000ClientId())
            $this->httpOptions = [
                'auth_basic' => [$this->app->auto2000ClientId(), $this->app->auto2000ClientSecret()]
            ];

        return $this->getHttpClient();
    }

    protected function getHttpClient(): HttpClientInterface
    {
        return BaseClient::createForBaseUri($this->getAuto2000BaseUrl(), $this->httpOptions);
    }

    protected function fetchToken(): ?string
    {
        $token = (new Authentication($this->getBasicClient()))->getToken();

        return $token instanceof Token ? $token->getAccessToken() : null;
    }

    protected function getAuto2000BaseUrl(): string
    {
        return $this->config->auto2000BaseUrl();
    }
}