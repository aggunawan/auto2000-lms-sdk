<?php

namespace Aggunawan\Auto2000LMS\Interfaces;

interface CompanyConfigInterface
{
    public function defaultSourceSystem(): string;
    public function defaultSourceCategoryCode(): string;
    public function defaultSourceCode(): string;
    public function defaultUserGroup(): string;
    public function defaultCompanyCode(): string;
}