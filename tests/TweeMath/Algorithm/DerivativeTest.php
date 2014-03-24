<?php
namespace TweeMath\Algorithm;
use PHPUnit_Framework_TestCase;

class DerivativeTest extends PHPUnit_Framework_TestCase
{
    public function testDiff()
    {
        $input = array(0 => 0, 1 => 2, 2 => 4,  3 => 3, 4 => 5, 5 => 3, 6 => 1);
        $output = array(0 => 2.0, 1 => 2, 2 => -1, 3 => 2, 4 => -2, 5 => -2);
        $this->assertEquals($output, Derivative::apply($input, 1));
    }

    public function testDiffWithDots()
    {
        $input = array(0 => 0, 1 => 2, 4 => 5, 6 => 1);
        $output = array(0 => 2, 1 => 3, 4 => -5);
        $this->assertEquals($output, Derivative::apply($input, 1));
    }

    public function testNOtEnothgElemetsArray()
    {
        $input = array(0 => 1);
        $output = array();
        $this->assertEquals($output, Derivative::apply($input, 1));
    }
}