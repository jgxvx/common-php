<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

/**
 * Credit card number regex found on Stack Overflow.
 *
 * @link http://stackoverflow.com/a/23231321
 */
class Discover extends AbstractValidator
{

    protected function getPattern() : string
    {
        return '/^(?:65[4-9][0-9]{13}|64[4-9][0-9]{13}|6011[0-9]{12}|622(?:12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[01][0-9]|92[0-5])[0-9]{10})$/';
    }
}
