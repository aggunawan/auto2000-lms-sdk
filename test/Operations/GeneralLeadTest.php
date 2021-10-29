<?php

namespace Test\Operations;

use Aggunawan\Auto2000LMS\Exceptions\InvalidLead;
use Aggunawan\Auto2000LMS\Objects\Lead;
use Aggunawan\Auto2000LMS\Objects\LeadResponse;
use Aggunawan\Auto2000LMS\Operations\GeneralLead;
use Carbon\Carbon;
use Mockery;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionMethod;
use ReflectionProperty;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

class GeneralLeadTest extends TestCase
{
    function testIsValidLead()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertTrue($ops->isValidLead($lead));
    }

    function testIsValidWithoutCustomerName()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andThrow(InvalidLead::class);
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutCustomerPhone()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andThrow(InvalidLead::class);
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutCreationTime()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andThrow(InvalidLead::class);
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutPreferredDate()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andThrow(InvalidLead::class);
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutProspectVariant()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andThrow(InvalidLead::class);
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutBusinessAreaCode()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andThrow(InvalidLead::class);
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutSourceCategoryCode()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andThrow(InvalidLead::class);
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutStatus()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andThrow(InvalidLead::class);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutSourceCode()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andThrow(InvalidLead::class);
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutCompanyCode()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andThrow(InvalidLead::class);
        $lead->shouldReceive('userGroup')->andReturn('ug');

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    function testIsValidWithoutUserGroup()
    {
        $ops = $this->getGeneralLead();
        $lead = Mockery::mock(Lead::class);
        $lead->shouldReceive('customerName')->andReturn('name');
        $lead->shouldReceive('customerPhone')->andReturn('name');
        $lead->shouldReceive('leadCreationTime')->andReturn(Carbon::now());
        $lead->shouldReceive('leadPreferredDate')->andReturn(Carbon::now());
        $lead->shouldReceive('leadProspectVariant')->andReturn('variant');
        $lead->shouldReceive('leadBusinessAreaCode')->andReturn('bac');
        $lead->shouldReceive('leadSourceCategoryCode')->andReturn('scc');
        $lead->shouldReceive('leadStatus')->andReturn(15);
        $lead->shouldReceive('sourceCode')->andReturn('sc');
        $lead->shouldReceive('companyCode')->andReturn('cc');
        $lead->shouldReceive('userGroup')->andThrow(InvalidLead::class);

        $ops->isValidLead($lead);
        $this->assertFalse($ops->isValidLead($lead));
    }

    /**
     * @return GeneralLead
     */
    protected function getGeneralLead(): GeneralLead
    {
        return new GeneralLead(new MockHttpClient());
    }

    public function testCreateLead()
    {
        $ops = Mockery::mock(GeneralLead::class)->makePartial();
        $ops->shouldAllowMockingProtectedMethods();
        $ops->shouldReceive('leadsToArray')->andReturn([]);

        $prop = new ReflectionProperty(GeneralLead::class, 'httpClient');
        $prop->setAccessible(true);
        $prop->setValue(
            $ops,
            new MockHttpClient(
                new MockResponse(json_encode(['status' => 'Success', 'message' => 'Done.'])),
                'https://example.com'
            )
        );

        /** @noinspection PhpUndefinedMethodInspection */
        $created = $ops->createLead(new Lead());
        $this->assertNotNull($created);
        $this->assertEquals('Success', $created->responseStatus());
        $this->assertEquals('Done.', $created->responseMessage());
        $this->assertInstanceOf(LeadResponse::class, $created);
        $this->assertInstanceOf(Lead::class, $created->createdLeads());
    }

    /**
     * @throws ReflectionException
     */
    function testLeadsToArray()
    {
        $ops = $this->getGeneralLead();
        $carbon = Carbon::now();

        $lead = new Lead();
        $lead->setCustomerName('name')
            ->setCustomerPhone('phone')
            ->setLeadCreationTime($carbon)
            ->setLeadPreferredDate($carbon)
            ->setLeadProspectVariant('var')
            ->setLeadBusinessAreaCode('bac')
            ->setLeadSourceCategoryCode('scc')
            ->setLeadStatus(15)
            ->setSourceCode('sc')
            ->setCompanyCode('cc')
            ->setUserGroup('ug');

        $method = new ReflectionMethod(GeneralLead::class, 'leadsToArray');
        $method->setAccessible(true);

        $this->assertSame(
            [
                "AssignmentUserGroup" => 'ug',
                "datas" => [
                    [
                        "Title" => null,
                        "Name1" => 'name',
                        "Phone1" => 'phone',
                        "Email1" => null,
                        "Address1" => null,
                        "AreaCode" => null,
                        "CityCode" => null,
                        "PreferredDateToContacted" => $carbon->toDateTimeLocalString(),
                        "ProspectVariant" => 'var',
                        "Notes1" => null,
                        "Program" => null,
                        "BusinessAreaCode" => 'bac',
                        "SalesmanNo" => null,
                        "SourceCreatedTime" => $carbon->toDateTimeLocalString(),
                        "SourceSystemNo" => null,
                        "SourceSystem" => null,
                        "SourceCategoryCode" => 'scc',
                        "SourceCode" => 'sc',
                        "CompanyCodeCode" => 'cc',
                        "Status" => 15,
                        "UserGroup" => 'ug',
                    ]
                ]
            ],
            $method->invoke($ops, $lead)
        );
    }
}
