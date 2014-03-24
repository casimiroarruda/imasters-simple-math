<?php
namespace iMasters\SimpleMath\Context;

use Respect\Rest\Routable;

class Multiplication implements Routable
{
    public function get($multiplicand,  $multiplier)
    {
        return bcmul((float)$multiplicand, (float)$multiplier);
    }
}
