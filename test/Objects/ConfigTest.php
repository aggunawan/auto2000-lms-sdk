<?php

namespace Test\Objects;

use Aggunawan\Auto2000LMS\Objects\Config;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionProperty;

class ConfigTest extends TestCase
{
    /**
     * @throws ReflectionException
     */
    public function testAuto2000BaseUrl()
    {
        $config = new Config();
        $reflection = new ReflectionProperty($config, 'baseUrl');
        $reflection->setAccessible(true);
        $reflection->setValue($config, 'uri');

        $this->assertSame('uri', $config->auto2000BaseUrl());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetBaseUrl()
    {
        $config = new Config();
        $config->setBaseUrl('baseUrl');

        $reflection = new ReflectionProperty($config, 'baseUrl');
        $reflection->setAccessible(true);

        $this->assertSame('baseUrl', $reflection->getValue($config));
    }
}
