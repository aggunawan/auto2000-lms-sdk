<?php

namespace Aggunawan\Auto2000LMS\Objects;

use Aggunawan\Auto2000LMS\Enums\TitleEnum;
use Aggunawan\Auto2000LMS\Interfaces\LeadRequestInterface;
use Carbon\Carbon;

class Lead implements LeadRequestInterface
{
    private ?TitleEnum $customerTitle = null;
    private string $customerName;
    private string $customerPhone;
    private ?string $customerEmail = null;
    private ?string $customerAddress = null;
    private Carbon $leadCreationTime;
    private Carbon $leadPreferredDate;
    private string $leadProspectVariant;
    private string $leadBusinessAreaCode;
    private string $leadSourceCategoryCode;
    private int $leadStatus;
    private ?string $leadNote;
    private ?string $leadProgram;
    private ?string $leadAreaCode;
    private ?string $leadCityCode;
    private ?string $leadSalesmanNumber;
    private string $sourceCode;
    private ?string $sourceSystem;
    private ?string $sourceSystemNumber;
    private string $companyCode;
    private string $userGroup;

    public function customerTitle(): ?TitleEnum
    {
        return $this->customerTitle;
    }

    public function customerName(): string
    {
        return $this->customerName;
    }

    public function customerPhone(): string
    {
        return $this->customerPhone;
    }

    public function customerEmail(): ?string
    {
        return $this->customerEmail;
    }

    public function customerAddress(): ?string
    {
        return $this->customerAddress;
    }

    public function leadCreationTime(): Carbon
    {
        return $this->leadCreationTime;
    }

    public function leadPreferredDate(): Carbon
    {
        return $this->leadPreferredDate;
    }

    public function leadProspectVariant(): string
    {
        return $this->leadProspectVariant;
    }

    public function leadBusinessAreaCode(): string
    {
        return $this->leadBusinessAreaCode;
    }

    public function leadSourceCategoryCode(): string
    {
        return $this->leadSourceCategoryCode;
    }

    public function leadStatus(): int
    {
        return $this->leadStatus;
    }

    public function leadNote(): ?string
    {
        return $this->leadNote;
    }

    public function leadProgram(): ?string
    {
        return $this->leadProgram;
    }

    public function leadAreaCode(): ?string
    {
        return $this->leadAreaCode;
    }

    public function leadCityCode(): ?string
    {
        return $this->leadCityCode;
    }

    public function leadSalesmanNumber(): ?string
    {
        return $this->leadSalesmanNumber;
    }

    public function sourceCode(): string
    {
        return $this->sourceCode;
    }

    public function sourceSystem(): ?string
    {
        return $this->sourceSystem;
    }

    public function sourceSystemNumber(): ?string
    {
        return $this->sourceSystemNumber;
    }

    public function companyCode(): string
    {
        return $this->companyCode;
    }

    public function userGroup(): string
    {
        return $this->userGroup;
    }

    public function setCustomerName(string $customerName): Lead
    {
        $this->customerName = $customerName;
        return $this;
    }

    public function setCustomerPhone(string $customerPhone): Lead
    {
        $this->customerPhone = $customerPhone;
        return $this;
    }

    public function setCustomerEmail(?string $customerEmail): Lead
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }

    public function setCustomerAddress(?string $customerAddress): Lead
    {
        $this->customerAddress = $customerAddress;
        return $this;
    }

    public function setLeadCreationTime(Carbon $leadCreationTime): Lead
    {
        $this->leadCreationTime = $leadCreationTime;
        return $this;
    }

    public function setLeadPreferredDate(Carbon $leadPreferredDate): Lead
    {
        $this->leadPreferredDate = $leadPreferredDate;
        return $this;
    }

    public function setLeadProspectVariant(string $leadProspectVariant): Lead
    {
        $this->leadProspectVariant = $leadProspectVariant;
        return $this;
    }

    public function setLeadBusinessAreaCode(string $leadBusinessAreaCode): Lead
    {
        $this->leadBusinessAreaCode = $leadBusinessAreaCode;
        return $this;
    }

    public function setLeadSourceCategoryCode(string $leadSourceCategoryCode): Lead
    {
        $this->leadSourceCategoryCode = $leadSourceCategoryCode;
        return $this;
    }

    public function setLeadStatus(string $leadStatus): Lead
    {
        $this->leadStatus = $leadStatus;
        return $this;
    }

    public function setLeadNote(?string $leadNote): Lead
    {
        $this->leadNote = $leadNote;
        return $this;
    }

    public function setLeadProgram(?string $leadProgram): Lead
    {
        $this->leadProgram = $leadProgram;
        return $this;
    }

    public function setLeadAreaCode(?string $leadAreaCode): Lead
    {
        $this->leadAreaCode = $leadAreaCode;
        return $this;
    }

    public function setLeadCityCode(?string $leadCityCode): Lead
    {
        $this->leadCityCode = $leadCityCode;
        return $this;
    }

    public function setLeadSalesmanNumber(?string $leadSalesmanNumber): Lead
    {
        $this->leadSalesmanNumber = $leadSalesmanNumber;
        return $this;
    }

    public function setSourceCode(string $sourceCode): Lead
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }

    public function setSourceSystem(?string $sourceSystem): Lead
    {
        $this->sourceSystem = $sourceSystem;
        return $this;
    }

    public function setSourceSystemNumber(?string $sourceSystemNumber): Lead
    {
        $this->sourceSystemNumber = $sourceSystemNumber;
        return $this;
    }

    public function setCompanyCode(string $companyCode): Lead
    {
        $this->companyCode = $companyCode;
        return $this;
    }

    public function setUserGroup(string $userGroup): Lead
    {
        $this->userGroup = $userGroup;
        return $this;
    }
}