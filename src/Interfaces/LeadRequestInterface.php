<?php

namespace Aggunawan\Auto2000LMS\Interfaces;

use Aggunawan\Auto2000LMS\Enums\TitleEnum;
use Aggunawan\Auto2000LMS\Exceptions\InvalidLead;
use Carbon\Carbon;

interface LeadRequestInterface
{
    public function customerTitle(): ?TitleEnum;

    /**
     * @throws InvalidLead
     */
    public function customerName(): string;

    /**
     * @throws InvalidLead
     */
    public function customerPhone(): string;

    public function customerEmail(): ?string;

    public function customerAddress(): ?string;

    /**
     * @throws InvalidLead
     */
    public function leadCreationTime(): Carbon;

    /**
     * @throws InvalidLead
     */
    public function leadPreferredDate(): Carbon;

    /**
     * @throws InvalidLead
     */
    public function leadProspectVariant(): string;

    /**
     * @throws InvalidLead
     */
    public function leadBusinessAreaCode(): string;

    /**
     * @throws InvalidLead
     */
    public function leadSourceCategoryCode(): string;

    /**
     * @throws InvalidLead
     */
    public function leadStatus(): int;

    public function leadNote(): ?string;

    public function leadProgram(): ?string;

    public function leadAreaCode(): ?string;

    public function leadCityCode(): ?string;

    public function leadSalesmanNumber(): ?string;

    /**
     * @throws InvalidLead
     */
    public function sourceCode(): string;

    public function sourceSystem(): ?string;

    public function sourceSystemNumber(): ?string;

    /**
     * @throws InvalidLead
     */
    public function companyCode(): string;

    /**
     * @throws InvalidLead
     */
    public function userGroup(): string;
}