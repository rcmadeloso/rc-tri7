<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRole extends Enum
{
    const Manager = 1;
    const WebDeveloper = 2;
    const WebDesigner = 3;

    const AllowableValues = [
        '1' => 'Manager',
        '2' => 'Web Developer',
        '3' => 'Web Designer',
    ];
}
