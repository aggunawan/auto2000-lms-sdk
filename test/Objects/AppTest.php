<?php

namespace Test\Objects;

use Aggunawan\Auto2000LMS\Objects\App;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionProperty;

class AppTest extends TestCase
{
    /**
     * @throws ReflectionException
     */
    public function testAuto2000ClientId()
    {
        $app = new App();
        $prop = new ReflectionProperty($app, 'clientId');
        $prop->setAccessible(true);
        $prop->setValue($app, 'client-id');

        $this->assertSame('client-id', $app->auto2000ClientId());
    }

    /**
     * @throws ReflectionException
     */
    public function testAuto2000ClientSecret()
    {
        $app = new App();
        $prop = new ReflectionProperty($app, 'clientSecret');
        $prop->setAccessible(true);
        $prop->setValue($app, 'client-secret');

        $this->assertSame('client-secret', $app->auto2000ClientSecret());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetClientId()
    {
        $app = new App();
        $app->setClientId('client-id');
        $prop = new ReflectionProperty($app, 'clientId');
        $prop->setAccessible(true);

        $this->assertSame('client-id', $prop->getValue($app));
    }

    /**
     * @throws ReflectionException
     */
    public function testSetClientSecret()
    {
        $app = new App();
        $app->setClientSecret('client-secret');
        $prop = new ReflectionProperty($app, 'clientSecret');
        $prop->setAccessible(true);

        $this->assertSame('client-secret', $prop->getValue($app));
    }
}
