<?php

namespace Aggunawan\Auto2000LMS\Objects;

class Token
{
    private string $tokenType = 'bearer';
    private string $accessToken;
    private int $expiresIn;
    private string $scope = 'internal';

    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function setAccessToken(string $accessToken): Token
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function setExpiresIn(int $expiresIn): Token
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }
}