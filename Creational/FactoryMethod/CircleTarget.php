<?php
namespace Creational\FactoryMethod;

class CircleTarget
implements Target
{
    /**
     * X coordinate of center
     * @var float
     */
    private $x;

    /**
     * Y coordinate of center
     * @var float
     */
    private $y;

    /**
     * Radius of circle
     * @var float
     */
    private $r;

    /**
     *
     * @param $x
     * @param $y
     * @param $r
     */
    public function __construct($x, $y, $r)
    {
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return bool
     */
    public function isHit($x, $y)
    {
        if ((pow($x - $this->x, 2) + pow($y - $this->y, 2)) <= pow($this->r, 2)) {
            return true;
        }

        return false;
    }
}