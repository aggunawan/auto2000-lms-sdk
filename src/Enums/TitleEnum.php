<?php

namespace Aggunawan\Auto2000LMS\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self company()
 * @method static self mr()
 * @method static self mrs()
 */
class TitleEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'company' => 1,
            'mr' => 2,
            'mrs' => 3,
        ];
    }

}