<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

/**
 * Credit card number regex found on Stack Overflow.
 *
 * @link http://stackoverflow.com/a/23231321
 */
class Visa extends AbstractValidator
{

    protected function getPattern() : string
    {
        return '/^4[0-9]{12}(?:[0-9]{3})?$/';
    }
}
