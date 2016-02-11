<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

/**
 * Credit card number regex found on Stack Overflow.
 *
 * @link http://stackoverflow.com/a/23231321
 */
class DinersClub extends AbstractValidator
{

    protected function getPattern() : string
    {
        return '/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/';
    }
}