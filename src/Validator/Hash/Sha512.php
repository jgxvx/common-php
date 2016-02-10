<?php

namespace Jgxvx\Common\Validator\Hash;

use Jgxvx\Common\Validator\AbstractRegexValidator;

class Sha512 extends AbstractRegexValidator
{

    protected function getPattern() : string
    {
        return '/^[a-f0-9]{128}$/i';
    }
}
