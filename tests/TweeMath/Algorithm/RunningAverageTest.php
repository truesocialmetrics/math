<?php
namespace TweeMath\Algorithm;
use PHPUnit_Framework_TestCase;

class RunningAverageTest extends PHPUnit_Framework_TestCase
{
    public function testFitWindow()
    {
        $input = array(0 => 0, 1 => 2, 3 => 3, 4 => 5, 5 => 3, 6 => 1);
        $output = array(1 => 1,  4 => 4, 6 => 2);
        $this->assertEquals($output, RunningAverage::apply($input, 2));
    }
}