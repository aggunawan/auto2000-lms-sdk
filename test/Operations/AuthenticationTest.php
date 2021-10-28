<?php

namespace Test\Operations;

use Aggunawan\Auto2000LMS\Objects\Token;
use Aggunawan\Auto2000LMS\Operations\Authentication;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionProperty;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

class AuthenticationTest extends TestCase
{
    /**
     * @throws ReflectionException
     */
    public function testCreateClass()
    {
        $httpClient = new MockHttpClient();
        $auth = new Authentication($httpClient);

        $httpProp = new ReflectionProperty($auth, 'httpClient');
        $httpProp->setAccessible(true);

        $this->assertSame($httpClient, $httpProp->getValue($auth));
    }

    public function testGetToken()
    {
        $httpClient = new MockHttpClient(
            [
                new MockResponse(json_encode([
                    'expires_in' => 3600,
                    'access_token' => 'token'
                ]))
            ],
            'https://example.com'
        );

        $auth = new Authentication($httpClient);
        $token = $auth->getToken();

        $this->assertInstanceOf(Token::class, $token);
    }
}
