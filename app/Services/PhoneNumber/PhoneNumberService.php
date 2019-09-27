<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 27.09.2019
 * Time: 14:38
 */

namespace App\Services\PhoneNumber;

/**
 * Class PhoneNumberService
 * @package App\Services\PhoneNumber
 */
class PhoneNumberService
{

    /**
     * @param string $phoneNumber
     * @return string
     */
    public static function format(string $phoneNumber)
    {
        return substr($phoneNumber, 0, 3)
            . '(' . substr($phoneNumber, 3, 3) . ')'
            . substr($phoneNumber, 6, 3) . '-'
            . substr($phoneNumber, 9, 2) . '-'
            . substr($phoneNumber, 11, 2);
    }
}