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
}