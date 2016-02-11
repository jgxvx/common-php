<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

/**
 * Credit card number regex found on Stack Overflow.
 *
 * @link http://stackoverflow.com/a/23231321
 */
class Jcb extends AbstractValidator
{

    protected function getPattern() : string
    {
        return '/^(?:2131|1800|35\d{3})\d{11}$/';
    }
}
