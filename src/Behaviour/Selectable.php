<?php

namespace Jgxvx\Common\Behaviour;

interface Selectable
{

    public function isSelected() : bool;

    public function setSelected(bool $selected);
}
