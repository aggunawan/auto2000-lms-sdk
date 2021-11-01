<?php

namespace Aggunawan\Auto2000LMS\Objects;

use Aggunawan\Auto2000LMS\Interfaces\CompanyConfigInterface;

class CompanyConfig implements CompanyConfigInterface
{
    private string $sourceSystem;
    private string $sourceCategoryCode;
    private string $sourceCode;
    private string $userGroup;
    private string $companyCode;

    public function defaultSourceSystem(): string
    {
        return $this->sourceSystem;
    }

    public function defaultSourceCategoryCode(): string
    {
        return $this->sourceCategoryCode;
    }

    public function defaultSourceCode(): string
    {
        return $this->sourceCode;
    }

    public function defaultUserGroup(): string
    {
        return $this->userGroup;
    }

    public function defaultCompanyCode(): string
    {
        return $this->companyCode;
    }

    public function setSourceSystem(string $sourceSystem): CompanyConfig
    {
        $this->sourceSystem = $sourceSystem;
        return $this;
    }

    public function setSourceCategoryCode(string $sourceCategoryCode): CompanyConfig
    {
        $this->sourceCategoryCode = $sourceCategoryCode;
        return $this;
    }

    public function setSourceCode(string $sourceCode): CompanyConfig
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }

    public function setUserGroup(string $userGroup): CompanyConfig
    {
        $this->userGroup = $userGroup;
        return $this;
    }

    public function setCompanyCode(string $companyCode): CompanyConfig
    {
        $this->companyCode = $companyCode;
        return $this;
    }
}