<?php
declare(strict_types = 1);

namespace Mookofe\Benchmark\Sorters\Orientation;

/**
 * Class Asc
 *
 * @author Victor Cruz <cruzrosario@gmail.com>
 */
class Asc implements OrientationInterface
{
    /**
     * @inheritdoc
     */
    public function orderFunction(float $a, float $b): int
    {
        return ($a > $b) ? +1 : -1;
    }
}
