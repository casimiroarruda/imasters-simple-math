<?php
namespace iMasters\SimpleMath\Context;

use Respect\Rest\Routable;

class SquareRoot implements Routable
{
    public function get($radicand)
    {
        return bcsqrt((float)$radicand);
    }
}
