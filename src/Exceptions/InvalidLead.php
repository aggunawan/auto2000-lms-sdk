<?php

namespace Aggunawan\Auto2000LMS\Exceptions;

use Exception;

class InvalidLead extends Exception
{
    public function __construct()
    {
        parent::__construct('required values contain null');
    }

}