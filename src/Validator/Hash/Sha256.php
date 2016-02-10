<?php

namespace Jgxvx\Common\Validator\Hash;

use Jgxvx\Common\Validator\AbstractRegexValidator;

class Sha256 extends AbstractRegexValidator
{

    protected function getPattern() : string
    {
        return '/^[a-f0-9]{64}$/i';
    }
}
