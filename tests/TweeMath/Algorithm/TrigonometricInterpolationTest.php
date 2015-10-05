<?php
namespace TweeMath\Algorithm;
use PHPUnit_Framework_TestCase;

class TrigonometricInterpolationTest extends PHPUnit_Framework_TestCase
{
    public function testLnerExtrapolationFor2Points()
    {
        $input = array(0 => 0, 1 => 1);
        $this->assertEquals(2.9092974268256819, TrigonometricInterpolation::apply($input, 2));
        $this->assertEquals(0.61985638465105075, TrigonometricInterpolation::apply($input, 0.5));
    }

    public function testLnerExtrapolationFor3Points()
    {
        $input = array(0 => 0, 1 => 1, 2 => 1);
        $this->assertEquals(1.2431975046920718, TrigonometricInterpolation::apply($input, 4));
    }

    public function testLnerExtrapolationForSinglePoint()
    {
        $input = array(1 => 1);
        $this->assertEquals(1, TrigonometricInterpolation::apply($input, 2));
    }
}