<?php

namespace Test;

use Aggunawan\Auto2000LMS\Client;
use Aggunawan\Auto2000LMS\Exceptions\InvalidUrlConfig;
use Aggunawan\Auto2000LMS\Objects\Config;
use Mockery;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionProperty;

class ClientTest extends TestCase
{
    /**
     * @throws InvalidUrlConfig
     */
    public function testGetBaseUrl()
    {
        $config = Mockery::mock(Config::class);
        $config->shouldReceive('auto2000BaseUrl')->andReturn('uri');

        $client = new Client($config);
        $this->assertSame('uri', $client->getBaseUrl());
    }

    /**
     * @throws ReflectionException
     * @throws InvalidUrlConfig
     */
    public function testSetBaseUrl()
    {
        $config = Mockery::mock(Config::class);
        $config->shouldReceive('auto2000BaseUrl')->andReturn('uri');

        $client = new Client($config);
        $client->setBaseUrl('newUri');

        $prop = new ReflectionProperty($client, 'baseUrl');
        $prop->setAccessible(true);

        $this->assertSame('newUri', $prop->getValue($client));
    }

    /**
     * @throws InvalidUrlConfig
     */
    public function testCreateClientWithInvalidConfig()
    {
        $this->expectException(InvalidUrlConfig::class);

        $config = Mockery::mock(Config::class);
        $config->shouldReceive('auto2000BaseUrl')->andReturn('');

        new Client($config);
    }
}
