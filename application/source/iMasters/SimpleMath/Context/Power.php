<?php
namespace iMasters\SimpleMath\Context;

use Respect\Rest\Routable;

class Power implements Routable
{
    public function get($base, $exponent)
    {
        return bcpow((float)$base, (float)$exponent);
    }
}
