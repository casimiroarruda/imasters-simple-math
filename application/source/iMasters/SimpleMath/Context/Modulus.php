<?php
namespace iMasters\SimpleMath\Context;

use Respect\Rest\Routable;

class Modulus implements Routable
{
    public function get($dividend, $divisor)
    {
        return (int) bcmod((float) $dividend, (float) $divisor);
    }
}
