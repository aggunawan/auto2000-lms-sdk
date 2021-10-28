<?php

namespace Aggunawan\Auto2000LMS\Interfaces;

use Aggunawan\Auto2000LMS\Enums\TitleEnum;
use Carbon\Carbon;

interface LeadRequestInterface
{
    public function customerTitle(): ?TitleEnum;
    public function customerName(): string;
    public function customerPhone(): string;
    public function customerEmail(): ?string;
    public function customerAddress(): ?string;

    public function leadCreationTime(): Carbon;
    public function leadPreferredDate(): Carbon;
    public function leadProspectVariant(): string;
    public function leadBusinessAreaCode(): string;
    public function leadSourceCategoryCode(): string;
    public function leadStatus(): int;
    public function leadNote(): ?string;
    public function leadProgram(): ?string;
    public function leadAreaCode(): ?string;
    public function leadCityCode(): ?string;
    public function leadSalesmanNumber(): ?string;

    public function sourceCode(): string;
    public function sourceSystem(): ?string;
    public function sourceSystemNumber(): ?string;
    public function companyCode(): string;
    public function userGroup(): string;
}