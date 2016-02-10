<?php

namespace Jgxvx\Common\Validator;

interface StringValidator extends Validator
{

    public function isValid(string $value) : bool;
}
