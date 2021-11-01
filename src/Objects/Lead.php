<?php

namespace Aggunawan\Auto2000LMS\Objects;

use Aggunawan\Auto2000LMS\Enums\TitleEnum;
use Aggunawan\Auto2000LMS\Exceptions\InvalidLead;
use Aggunawan\Auto2000LMS\Interfaces\CompanyConfigInterface;
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
    private ?string $leadNote = null;
    private ?string $leadProgram = null;
    private ?string $leadAreaCode = null;
    private ?string $leadCityCode = null;
    private ?string $leadSalesmanNumber = null;
    private string $sourceCode;
    private ?string $sourceSystem = null;
    private ?string $sourceSystemNumber = null;
    private string $companyCode;
    private string $userGroup;
    private ?CompanyConfigInterface $config;

    public function __construct(CompanyConfigInterface $config = null)
    {
        $this->config = $config;
    }

    public function customerTitle(): ?TitleEnum
    {
        return $this->customerTitle;
    }

    /**
     * @throws InvalidLead
     */
    public function customerName(): string
    {
        $this->checkInvalidException('customerName');
        return $this->customerName;
    }

    /**
     * @throws InvalidLead
     */
    public function customerPhone(): string
    {
        $this->checkInvalidException('customerPhone');
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

    /**
     * @throws InvalidLead
     */
    public function leadCreationTime(): Carbon
    {
        $this->checkInvalidException('leadCreationTime');
        return $this->leadCreationTime;
    }

    /**
     * @throws InvalidLead
     */
    public function leadPreferredDate(): Carbon
    {
        $this->checkInvalidException('leadPreferredDate');
        return $this->leadPreferredDate;
    }

    /**
     * @throws InvalidLead
     */
    public function leadProspectVariant(): string
    {
        $this->checkInvalidException('leadProspectVariant');
        return $this->leadProspectVariant;
    }

    /**
     * @throws InvalidLead
     */
    public function leadBusinessAreaCode(): string
    {
        $this->checkInvalidException('leadBusinessAreaCode');
        return $this->leadBusinessAreaCode;
    }

    /**
     * @throws InvalidLead
     */
    public function leadSourceCategoryCode(): string
    {
        $this->checkInvalidException('leadSourceCategoryCode');
        return $this->leadSourceCategoryCode;
    }

    /**
     * @throws InvalidLead
     */
    public function leadStatus(): int
    {
        $this->checkInvalidException('leadStatus');
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

    /**
     * @throws InvalidLead
     */
    public function sourceCode(): string
    {
        $this->checkInvalidException('sourceCode');
        return $this->sourceCode;
    }

    public function sourceSystem(): ?string
    {
        return is_null($this->sourceSystem) && !is_null($this->config) ?
            $this->config->defaultSourceSystem() : $this->sourceSystem;
    }

    public function sourceSystemNumber(): ?string
    {
        return $this->sourceSystemNumber;
    }

    /**
     * @throws InvalidLead
     */
    public function companyCode(): string
    {
        $this->checkInvalidException('companyCode');
        return $this->companyCode;
    }

    /**
     * @throws InvalidLead
     */
    public function userGroup(): string
    {
        $this->checkInvalidException('userGroup');
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

    public function setCustomerTitle(TitleEnum $enum): Lead
    {
        $this->customerTitle = $enum;
        return $this;
    }

    /**
     * @throws InvalidLead
     */
    protected function checkInvalidException(string $key): void
    {
        $map = [
            'companyCode' => 'defaultCompanyCode',
            'userGroup' => 'defaultUserGroup',
            'sourceCode' => 'defaultSourceCode',
            'leadSourceCategoryCode' => 'defaultSourceCategoryCode',
            'sourceSystem' => 'defaultSourceSystem',
        ];

        if ($this->config && is_null($this->{$key} ?? null)) {
            $this->{$key} = $this->config->{$map[$key]}();
        } else {
            if (!isset($this->{$key})) throw new InvalidLead();
        }
    }
}