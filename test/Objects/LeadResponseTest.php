<?php

namespace Test\Objects;

use Aggunawan\Auto2000LMS\Objects\Lead;
use Aggunawan\Auto2000LMS\Objects\LeadResponse;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

class LeadResponseTest extends TestCase
{
    public function testGetLeadsStatus()
    {
        $prop = new ReflectionProperty(LeadResponse::class, 'status');
        $leads = new LeadResponse();
        $prop->setAccessible(true);
        $prop->setValue($leads, 'created');

        $this->assertSame('created', $leads->responseStatus());
    }

    public function testGetLeadsMessage()
    {
        $prop = new ReflectionProperty(LeadResponse::class, 'message');
        $leads = new LeadResponse();
        $prop->setAccessible(true);
        $prop->setValue($leads, 'success');

        $this->assertSame('success', $leads->responseMessage());
    }

    public function testGetCreatedLeads()
    {
        $prop = new ReflectionProperty(LeadResponse::class, 'leads');
        $leads = new LeadResponse();
        $prop->setAccessible(true);
        $prop->setValue($leads, new Lead());

        $this->assertInstanceOf(Lead::class, $leads->createdLeads());
    }

    public function testSetStatus()
    {
        $leads = new LeadResponse();
        $leads->setStatus('status');
        $prop = new ReflectionProperty(LeadResponse::class, 'status');
        $prop->setAccessible(true);

        $this->assertSame('status', $prop->getValue($leads));
    }

    public function testSetMessage()
    {
        $leads = new LeadResponse();
        $leads->setMessage('message');
        $prop = new ReflectionProperty(LeadResponse::class, 'message');
        $prop->setAccessible(true);

        $this->assertSame('message', $prop->getValue($leads));
    }

    public function testSetLeads()
    {
        $leads = new LeadResponse();
        $leads->setLeads(new Lead());
        $prop = new ReflectionProperty(LeadResponse::class, 'leads');
        $prop->setAccessible(true);

        $this->assertInstanceOf(Lead::class, $prop->getValue($leads));
    }
}
