<?php

namespace Test\Objects;

use Aggunawan\Auto2000LMS\Objects\CompanyConfig;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

class CompanyConfigTest extends TestCase
{
    public function testGetSourceSystem()
    {
        $conf = new CompanyConfig();

        $prop = new ReflectionProperty(CompanyConfig::class, 'sourceSystem');
        $prop->setAccessible(true);
        $prop->setValue($conf, 'ss');

        $this->assertSame('ss', $conf->defaultSourceSystem());
    }

    public function testGetSourceCategoryCode()
    {
        $conf = new CompanyConfig();

        $prop = new ReflectionProperty(CompanyConfig::class, 'sourceCategoryCode');
        $prop->setAccessible(true);
        $prop->setValue($conf, 'scc');

        $this->assertSame('scc', $conf->defaultSourceCategoryCode());
    }

    public function testGetSourceCode()
    {
        $conf = new CompanyConfig();

        $prop = new ReflectionProperty(CompanyConfig::class, 'sourceCode');
        $prop->setAccessible(true);
        $prop->setValue($conf, 'sc');

        $this->assertSame('sc', $conf->defaultSourceCode());
    }

    public function testGetUserGroup()
    {
        $conf = new CompanyConfig();

        $prop = new ReflectionProperty(CompanyConfig::class, 'userGroup');
        $prop->setAccessible(true);
        $prop->setValue($conf, 'ug');

        $this->assertSame('ug', $conf->defaultUserGroup());
    }

    public function testGetCompanyCode()
    {
        $conf = new CompanyConfig();

        $prop = new ReflectionProperty(CompanyConfig::class, 'companyCode');
        $prop->setAccessible(true);
        $prop->setValue($conf, 'cc');

        $this->assertSame('cc', $conf->defaultCompanyCode());
    }

    public function testSetSourceSystem()
    {
        $conf = new CompanyConfig();
        $conf->setSourceSystem('ss');

        $prop = new ReflectionProperty(CompanyConfig::class, 'sourceSystem');
        $prop->setAccessible(true);

        $this->assertSame('ss', $prop->getValue($conf));
    }

    public function testSetSourceCategoryCode()
    {
        $conf = new CompanyConfig();
        $conf->setSourceCategoryCode('scc');

        $prop = new ReflectionProperty(CompanyConfig::class, 'sourceCategoryCode');
        $prop->setAccessible(true);

        $this->assertSame('scc', $prop->getValue($conf));
    }

    public function testSetSourceCode()
    {
        $conf = new CompanyConfig();
        $conf->setSourceCode('sc');

        $prop = new ReflectionProperty(CompanyConfig::class, 'sourceCode');
        $prop->setAccessible(true);

        $this->assertSame('sc', $prop->getValue($conf));
    }

    public function testSetUserGroup()
    {
        $conf = new CompanyConfig();
        $conf->setUserGroup('ug');

        $prop = new ReflectionProperty(CompanyConfig::class, 'userGroup');
        $prop->setAccessible(true);

        $this->assertSame('ug', $prop->getValue($conf));
    }

    public function testSetCompanyCode()
    {
        $conf = new CompanyConfig();
        $conf->setCompanyCode('cc');

        $prop = new ReflectionProperty(CompanyConfig::class, 'companyCode');
        $prop->setAccessible(true);

        $this->assertSame('cc', $prop->getValue($conf));
    }
}
