<?php

namespace Wolust;

class SuperDivider
{
    /**
     * @param int $a
     * @param int $b
     * @return float
     */
    public function integerDivide($a, $b)
    {
        if ($b === 0) {
            throw new \LogicException('division by zero is not allowed');
        }

        return $a / $b;
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function floatDivide($a, $b)
    {
        return (float) bcdiv($a, $b, 10);
    }
}