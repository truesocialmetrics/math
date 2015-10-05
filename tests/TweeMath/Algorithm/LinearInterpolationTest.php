<?php
namespace TweeMath\Algorithm;
use PHPUnit_Framework_TestCase;

class LinearInterpolationTest extends PHPUnit_Framework_TestCase
{
    public function testLnerExtrapolationFor2Points()
    {
        $input = array(0 => 0, 1 => 1);
        $this->assertEquals(2, LinearInterpolation::apply($input, 2));
    }

    public function testLnerExtrapolationFor3Points()
    {
        $input = array(0 => 0, 1 => 1, 2 => 1);
        $this->assertEquals(2, LinearInterpolation::apply($input, 4));
    }

    public function testLnerExtrapolationForSinglePoint()
    {
        $input = array(1 => 1);
        $this->assertEquals(1, LinearInterpolation::apply($input, 2));
    }
}