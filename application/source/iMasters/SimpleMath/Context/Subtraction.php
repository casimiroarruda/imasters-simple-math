<?php
namespace iMasters\SimpleMath\Context;

use Respect\Rest\Routable;

class Subtraction implements Routable
{
    public function get($minuend, $subtrahend)
    {
        return bcsub((float)$minuend, (float)$subtrahend);
    }
}
