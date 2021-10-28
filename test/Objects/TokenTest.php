<?php

namespace Test\Objects;

use Aggunawan\Auto2000LMS\Objects\Token;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionProperty;

class TokenTest extends TestCase
{
    public function testGetTokenType()
    {
        $token = new Token();
        $this->assertSame('bearer', $token->getTokenType());
    }

    /**
     * @throws ReflectionException
     */
    public function testGetAccessToken()
    {
        $token = new Token();
        $prop = new ReflectionProperty($token, 'accessToken');
        $prop->setAccessible(true);
        $prop->setValue($token, 'access');

        $this->assertSame('access', $token->getAccessToken());
    }

    /**
     * @throws ReflectionException
     */
    public function testGetExpiresIn()
    {
        $token = new Token();
        $prop = new ReflectionProperty($token, 'expiresIn');
        $prop->setAccessible(true);
        $prop->setValue($token, 100);

        $this->assertSame(100, $token->getExpiresIn());
    }

    public function testGetScope()
    {
        $token = new Token();
        $this->assertSame('internal', $token->getScope());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetAccessToken()
    {
        $token = new Token();
        $token->setAccessToken('token');
        $prop = new ReflectionProperty($token, 'accessToken');
        $prop->setAccessible(true);

        $this->assertSame('token', $prop->getValue($token));
    }

    /**
     * @throws ReflectionException
     */
    public function testSetExpiresIn()
    {
        $token = new Token();
        $token->setExpiresIn(10);
        $prop = new ReflectionProperty($token, 'expiresIn');
        $prop->setAccessible(true);

        $this->assertSame(10, $prop->getValue($token));
    }
}
