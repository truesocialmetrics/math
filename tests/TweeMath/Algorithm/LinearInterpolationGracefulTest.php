<?php
namespace TweeMath\Algorithm;
use PHPUnit_Framework_TestCase;

class LinearInterpolationGracefullTest extends PHPUnit_Framework_TestCase
{
    public function testLnerExtrapolationFor2Points()
    {
        $input = array(time() => 0, time() + 1 => 1);
        $this->assertEquals(2, LinearInterpolationGracefull::apply($input, time() + 2));
    }

    public function testLnerExtrapolationFor2PointsLargeNumbers()
    {
        $max = (PHP_INT_MAX >> 1) + 1000;
        $input = array(time() => $max, time() + 1 => $max + 1);
        $this->assertEquals($max + 2, LinearInterpolationGracefull::apply($input, time() + 2));
    }

    public function testLnerExtrapolationFor3Points()
    {
        $input = array(0 => 0, 1 => 1, 2 => 1);
        $this->assertEquals(2, LinearInterpolationGracefull::apply($input, 4));
    }

    public function testLnerExtrapolationForSinglePoint()
    {
        $input = array(1 => 1);
        $this->assertEquals(1, LinearInterpolationGracefull::apply($input, 2));
    }
}