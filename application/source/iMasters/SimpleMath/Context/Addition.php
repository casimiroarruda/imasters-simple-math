<?php
namespace iMasters\SimpleMath\Context;

use Respect\Rest\Routable;

class Addition implements Routable
{
    public function get($augend, $addend)
    {
        return bcadd((float)$augend, (float)$addend);
    }
}
