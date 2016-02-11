<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

/**
 * Credit card number regex found on Stack Overflow.
 *
 * @link http://stackoverflow.com/a/23231321
 */
class MasterCard extends AbstractValidator
{

    protected function getPattern() : string
    {
        return '/^5[1-5][0-9]{14}$/';
    }
}
