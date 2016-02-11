<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

use Jgxvx\Common\Validator\AbstractRegexValidator;

abstract class AbstractValidator extends AbstractRegexValidator
{

    public function isValid(string $value) : bool
    {
        return parent::isValid($this->normalizeValue($value));
    }

    private function normalizeValue(string $value) : string
    {
        return str_replace([' ', '.', '-', ','], '', $value);
    }
}
