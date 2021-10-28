<?php

namespace Test\Objects;

use Aggunawan\Auto2000LMS\Enums\TitleEnum;
use Aggunawan\Auto2000LMS\Objects\Lead;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionProperty;

class LeadTest extends TestCase
{
    /**
     * @throws ReflectionException
     */
    public function testCustomerTitle()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'customerTitle');
        $prop->setAccessible(true);
        $prop->setValue($lead, TitleEnum::company());

        $this->assertSame(TitleEnum::company()->value, $lead->customerTitle()->value);
    }

    /**
     * @throws ReflectionException
     */
    public function testCustomerName()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'customerName');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'Name');

        $this->assertSame('Name', $lead->customerName());
    }

    /**
     * @throws ReflectionException
     */
    public function testCustomerPhone()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'customerPhone');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'phone');

        $this->assertSame('phone', $lead->customerPhone());
    }

    /**
     * @throws ReflectionException
     */
    public function testCustomerEmail()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'customerEmail');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'email');

        $this->assertSame('email', $lead->customerEmail());
    }

    /**
     * @throws ReflectionException
     */
    public function testCustomerAddress()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'customerAddress');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'address');

        $this->assertSame('address', $lead->customerAddress());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadCreationTime()
    {
        $lead = new Lead();
        $carbon = Carbon::now();

        $prop = new ReflectionProperty($lead, 'leadCreationTime');
        $prop->setAccessible(true);
        $prop->setValue($lead, $carbon);

        $this->assertSame($carbon->timestamp, $lead->leadCreationTime()->timestamp);
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadPreferredDate()
    {
        $lead = new Lead();
        $carbon = Carbon::now();

        $prop = new ReflectionProperty($lead, 'leadPreferredDate');
        $prop->setAccessible(true);
        $prop->setValue($lead, $carbon);

        $this->assertSame($carbon->timestamp, $lead->leadPreferredDate()->timestamp);
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadProspectVariant()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadProspectVariant');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'prospect');

        $this->assertSame('prospect', $lead->leadProspectVariant());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadBusinessAreaCode()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadBusinessAreaCode');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'ba');

        $this->assertSame('ba', $lead->leadBusinessAreaCode());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadSourceCategoryCode()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadSourceCategoryCode');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'ca');

        $this->assertSame('ca', $lead->leadSourceCategoryCode());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadStatus()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadStatus');
        $prop->setAccessible(true);
        $prop->setValue($lead, 1);

        $this->assertSame(1, $lead->leadStatus());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadNote()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadNote');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'note');

        $this->assertSame('note', $lead->leadNote());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadProgram()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadProgram');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'program');

        $this->assertSame('program', $lead->leadProgram());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadAreaCode()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadAreaCode');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'ac');

        $this->assertSame('ac', $lead->leadAreaCode());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadCityCode()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadCityCode');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'cc');

        $this->assertSame('cc', $lead->leadCityCode());
    }

    /**
     * @throws ReflectionException
     */
    public function testLeadSalesmanNumber()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'leadSalesmanNumber');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'sn');

        $this->assertSame('sn', $lead->leadSalesmanNumber());
    }

    /**
     * @throws ReflectionException
     */
    public function testSourceCode()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'sourceCode');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'sc');

        $this->assertSame('sc', $lead->sourceCode());
    }

    /**
     * @throws ReflectionException
     */
    public function testSourceSystem()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'sourceSystem');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'ss');

        $this->assertSame('ss', $lead->sourceSystem());
    }

    /**
     * @throws ReflectionException
     */
    public function testSourceSystemNumber()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'sourceSystemNumber');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'ssn');

        $this->assertSame('ssn', $lead->sourceSystemNumber());
    }

    /**
     * @throws ReflectionException
     */
    public function testCompanyCode()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'companyCode');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'cpc');

        $this->assertSame('cpc', $lead->companyCode());
    }

    /**
     * @throws ReflectionException
     */
    public function testUserGroup()
    {
        $lead = new Lead();

        $prop = new ReflectionProperty($lead, 'userGroup');
        $prop->setAccessible(true);
        $prop->setValue($lead, 'ug');

        $this->assertSame('ug', $lead->userGroup());
    }

    public function testSetCustomerName()
    {
        $lead = new Lead();
        $lead->setCustomerName('name');

        $prop = new ReflectionProperty(Lead::class, 'customerName');
        $prop->setAccessible(true);

        $this->assertSame('name', $prop->getValue($lead));
    }

    public function testSetCustomerPhone()
    {
        $lead = new Lead();
        $lead->setCustomerPhone('phone');

        $prop = new ReflectionProperty(Lead::class, 'customerPhone');
        $prop->setAccessible(true);

        $this->assertSame('phone', $prop->getValue($lead));
    }

    public function testSetCustomerEmail()
    {
        $lead = new Lead();
        $lead->setCustomerEmail('email');

        $prop = new ReflectionProperty(Lead::class, 'customerEmail');
        $prop->setAccessible(true);

        $this->assertSame('email', $prop->getValue($lead));
    }

    public function testSetCustomerAddress()
    {
        $lead = new Lead();
        $lead->setCustomerAddress('address');

        $prop = new ReflectionProperty(Lead::class, 'customerAddress');
        $prop->setAccessible(true);

        $this->assertSame('address', $prop->getValue($lead));
    }

    public function testSetLeadCreationTime()
    {
        $lead = new Lead();
        $carbon = Carbon::now();
        $lead->setLeadCreationTime($carbon);

        $prop = new ReflectionProperty(Lead::class, 'leadCreationTime');
        $prop->setAccessible(true);

        $this->assertSame($carbon->timestamp, $prop->getValue($lead)->timestamp);
    }

    public function testSetLeadPreferredDate()
    {
        $lead = new Lead();
        $carbon = Carbon::now();
        $lead->setLeadPreferredDate($carbon);

        $prop = new ReflectionProperty(Lead::class, 'leadPreferredDate');
        $prop->setAccessible(true);

        $this->assertSame($carbon->timestamp, $prop->getValue($lead)->timestamp);
    }

    public function testSetLeadProspectVariant()
    {
        $lead = new Lead();
        $lead->setLeadProspectVariant('pv');

        $prop = new ReflectionProperty(Lead::class, 'leadProspectVariant');
        $prop->setAccessible(true);

        $this->assertSame('pv', $prop->getValue($lead));
    }

    public function testSetLeadBusinessAreaCode()
    {
        $lead = new Lead();
        $lead->setLeadBusinessAreaCode('ac');

        $prop = new ReflectionProperty(Lead::class, 'leadBusinessAreaCode');
        $prop->setAccessible(true);

        $this->assertSame('ac', $prop->getValue($lead));
    }

    public function testSetLeadSourceCategoryCode()
    {
        $lead = new Lead();
        $lead->setLeadSourceCategoryCode('scc');

        $prop = new ReflectionProperty(Lead::class, 'leadSourceCategoryCode');
        $prop->setAccessible(true);

        $this->assertSame('scc', $prop->getValue($lead));
    }

    public function testSetLeadStatus()
    {
        $lead = new Lead();
        $lead->setLeadStatus(1);

        $prop = new ReflectionProperty(Lead::class, 'leadStatus');
        $prop->setAccessible(true);

        $this->assertSame(1, $prop->getValue($lead));
    }

    public function testSetLeadNote()
    {
        $lead = new Lead();
        $lead->setLeadNote('note');

        $prop = new ReflectionProperty(Lead::class, 'leadNote');
        $prop->setAccessible(true);

        $this->assertSame('note', $prop->getValue($lead));
    }

    public function testSetLeadProgram()
    {
        $lead = new Lead();
        $lead->setLeadProgram('program');

        $prop = new ReflectionProperty(Lead::class, 'leadProgram');
        $prop->setAccessible(true);

        $this->assertSame('program', $prop->getValue($lead));
    }

    public function testSetLeadAreaCode()
    {
        $lead = new Lead();
        $lead->setLeadAreaCode('aac');

        $prop = new ReflectionProperty(Lead::class, 'leadAreaCode');
        $prop->setAccessible(true);

        $this->assertSame('aac', $prop->getValue($lead));
    }

    public function testSetLeadCityCode()
    {
        $lead = new Lead();
        $lead->setLeadCityCode('cc');

        $prop = new ReflectionProperty(Lead::class, 'leadCityCode');
        $prop->setAccessible(true);

        $this->assertSame('cc', $prop->getValue($lead));
    }

    public function testSetLeadSalesmanNumber()
    {
        $lead = new Lead();
        $lead->setLeadSalesmanNumber('sn');

        $prop = new ReflectionProperty(Lead::class, 'leadSalesmanNumber');
        $prop->setAccessible(true);

        $this->assertSame('sn', $prop->getValue($lead));
    }

    public function testSetSourceCode()
    {
        $lead = new Lead();
        $lead->setSourceCode('sc');

        $prop = new ReflectionProperty(Lead::class, 'sourceCode');
        $prop->setAccessible(true);

        $this->assertSame('sc', $prop->getValue($lead));
    }

    public function testSetSourceSystem()
    {
        $lead = new Lead();
        $lead->setSourceSystem('ss');

        $prop = new ReflectionProperty(Lead::class, 'sourceSystem');
        $prop->setAccessible(true);

        $this->assertSame('ss', $prop->getValue($lead));
    }

    public function testSetSourceSystemNumber()
    {
        $lead = new Lead();
        $lead->setSourceSystemNumber('ssn');

        $prop = new ReflectionProperty(Lead::class, 'sourceSystemNumber');
        $prop->setAccessible(true);

        $this->assertSame('ssn', $prop->getValue($lead));
    }

    public function testSetCompanyCode()
    {
        $lead = new Lead();
        $lead->setCompanyCode('cpc');

        $prop = new ReflectionProperty(Lead::class, 'companyCode');
        $prop->setAccessible(true);

        $this->assertSame('cpc', $prop->getValue($lead));
    }

    public function testSetUserGroup()
    {
        $lead = new Lead();
        $lead->setUserGroup('ug');

        $prop = new ReflectionProperty(Lead::class, 'userGroup');
        $prop->setAccessible(true);

        $this->assertSame('ug', $prop->getValue($lead));
    }
}
