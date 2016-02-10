<?php

namespace Jgxvx\Common\Validator\Hash;

use Jgxvx\Common\Validator\AbstractRegexValidator;

class Md5 extends AbstractRegexValidator
{

    protected function getPattern() : string
    {
        return '/^[a-f0-9]{32}$/i';
    }
}
