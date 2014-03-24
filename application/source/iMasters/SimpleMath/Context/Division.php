<?php
namespace iMasters\SimpleMath\Context;

use Respect\Rest\Routable;

class Division implements Routable
{
    public function get($dividend, $divisor)
    {
        return bcdiv((float)$dividend, (float)$divisor);
    }
}
