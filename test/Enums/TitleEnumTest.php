<?php

namespace Test\Enums;

use Aggunawan\Auto2000LMS\Enums\TitleEnum;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionMethod;

class TitleEnumTest extends TestCase
{
    public function testGetCompanyValue()
    {
        $this->assertSame(1, TitleEnum::company()->value);
    }

    public function testGetMrValue()
    {
        $this->assertSame(2, TitleEnum::mr()->value);
    }

    public function testGetMrsValue()
    {
        $this->assertSame(3, TitleEnum::mrs()->value);
    }

    /**
     * @throws ReflectionException
     */
    public function testGetEnumValues()
    {
        $method = new ReflectionMethod(TitleEnum::class, 'values');
        $method->setAccessible(true);

        $this->assertSame(
            [
                'company' => 1,
                'mr' => 2,
                'mrs' => 3,
            ],
            $method->invoke(TitleEnum::company())
        );
    }
}
