<?php

namespace Jgxvx\Common\Behaviour;

interface Identifiable
{

    public function getId() : int;

    public function setId(int $id);
}
