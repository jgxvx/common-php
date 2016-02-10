<?php

namespace Jgxvx\Common\Validator;

abstract class AbstractRegexValidator implements StringValidator
{

    public function isValid(string $value) : bool
    {
        return preg_match($this->getPattern(), $value) === 1;
    }

    abstract protected function getPattern() : string;
}
