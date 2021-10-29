<?php

namespace Aggunawan\Auto2000LMS\Objects;

use Aggunawan\Auto2000LMS\Interfaces\LeadRequestInterface;
use Aggunawan\Auto2000LMS\Interfaces\LeadResponseInterface;

class LeadResponse implements LeadResponseInterface
{
    private string $status = 'failed';
    private string $message = 'Failed to create Leads.';
    private ?Lead $leads = null;

    public function responseStatus(): string
    {
        return $this->status;
    }

    public function responseMessage(): string
    {
        return $this->message;
    }

    public function createdLeads(): ?LeadRequestInterface
    {
        return $this->leads;
    }

    public function setStatus(string $status): LeadResponse
    {
        $this->status = $status;
        return $this;
    }

    public function setMessage(string $message): LeadResponse
    {
        $this->message = $message;
        return $this;
    }

    public function setLeads(?Lead $leads): LeadResponse
    {
        $this->leads = $leads;
        return $this;
    }

}