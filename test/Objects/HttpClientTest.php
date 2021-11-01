<?php

namespace Test\Objects;

use Aggunawan\Auto2000LMS\Objects\App;
use Aggunawan\Auto2000LMS\Objects\Config;
use Aggunawan\Auto2000LMS\Objects\HttpClient;
use Mockery;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionMethod;
use ReflectionProperty;
use Symfony\Component\HttpClient\HttpClient as BaseHttpClient;

class HttpClientTest extends TestCase
{
    public function testConstructObject()
    {
        $config = new Config();
        $config->setBaseUrl('https://example.com');
        $app = new App();
        $http = new HttpClient($config, $app);

        $configProp = new ReflectionProperty(HttpClient::class, 'config');
        $configProp->setAccessible(true);

        $appProp = new ReflectionProperty(HttpClient::class, 'app');
        $appProp->setAccessible(true);

        $this->assertInstanceOf(Config::class, $configProp->getValue($http));
        $this->assertInstanceOf(App::class, $appProp->getValue($http));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetHttpClient()
    {
        $config = new Config();
        $config->setBaseUrl('https://example.com');
        $app = new App();

        $http = new HttpClient($config, $app);
        $methodProp = new ReflectionProperty($http->getBasicClient(), 'defaultOptionsByRegexp');
        $methodProp->setAccessible(true);

        $base = BaseHttpClient::createForBaseUri('https://example.com');
        $baseProp = new ReflectionProperty($http->getBasicClient(), 'defaultOptionsByRegexp');
        $baseProp->setAccessible(true);

        $this->assertSame($baseProp->getValue($base), $methodProp->getValue($http->getBasicClient()));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetBasicClient()
    {
        $config = new Config();
        $config->setBaseUrl('https://example.com');

        $app = new App();
        $app->setClientId('id');
        $app->setClientSecret('secret');

        $http = new HttpClient($config, $app);

        $prop = new ReflectionProperty($http->getBasicClient(), 'defaultOptionsByRegexp');
        $prop->setAccessible(true);

        $headerPayload = new ReflectionProperty(HttpClient::class, 'httpOptions');
        $headerPayload->setAccessible(true);

        $this->assertSame(
            [
                'https\://example\.com/' => [
                    'auth_basic' => ['id', 'secret'],
                    'base_uri' => 'https://example.com'
                ]
            ],
            $prop->getValue($http->getBasicClient()),
        );

        $this->assertSame(['auth_basic' => ['id', 'secret']], $headerPayload->getValue($http));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetBearerClient()
    {
        $http = Mockery::mock(HttpClient::class)->makePartial();
        $http->shouldAllowMockingProtectedMethods();
        $http->shouldReceive('fetchToken')->andReturn('token');
        $http->shouldReceive('getAuto2000BaseUrl')->andReturn('https://example.com');

        /** @noinspection PhpUndefinedMethodInspection */
        $prop = new ReflectionProperty($http->getBearerClient(), 'defaultOptionsByRegexp');
        $prop->setAccessible(true);

        /** @noinspection PhpUndefinedMethodInspection */
        $this->assertSame(
            [
                'https\://example\.com/' => [
                    'auth_bearer' => 'token',
                    'base_uri' => 'https://example.com'
                ]
            ],
            $prop->getValue($http->getBearerClient()),
        );
    }

    /**
     * @throws ReflectionException
     */
    public function testGetBearerClientWithNullToken()
    {
        $http = Mockery::mock(HttpClient::class)->makePartial();
        $http->shouldAllowMockingProtectedMethods();
        $http->shouldReceive('fetchToken')->andReturn(null);
        $http->shouldReceive('getAuto2000BaseUrl')->andReturn('https://example.com');

        /** @noinspection PhpUndefinedMethodInspection */
        $prop = new ReflectionProperty($http->getBearerClient(), 'defaultOptionsByRegexp');
        $prop->setAccessible(true);

        /** @noinspection PhpUndefinedMethodInspection */
        $this->assertSame(
            [
                'https\://example\.com/' => [
                    'base_uri' => 'https://example.com'
                ]
            ],
            $prop->getValue($http->getBearerClient())
        );
    }

    /**
     * @throws ReflectionException
     */
    public function testGetAuth2000BaseUrl()
    {
        $http = new HttpClient(
            (new Config())->setBaseUrl('https://example.com'),
            (new App())
        );

        $method = new ReflectionMethod(HttpClient::class, 'getAuto2000BaseUrl');
        $method->setAccessible(true);

        $this->assertSame('https://example.com', $method->invoke($http));
    }
}
