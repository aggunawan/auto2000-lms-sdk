<?php

namespace Aggunawan\Auto2000LMS\Interfaces;

interface LeadResponseInterface
{
    public function responseStatus(): string;
    public function responseMessage(): string;
    public function createdLeads(): ?LeadRequestInterface;
}