<?php
namespace TweeMath\Algorithm;
use PHPUnit\Framework\TestCase;

class RunningAverageTest extends TestCase
{
    public function testFitWindow()
    {
        $input = array(0 => 0, 1 => 2, 3 => 3, 4 => 5, 5 => 3, 6 => 1);
        $output = array(1 => 1,  4 => 4, 6 => 2);
        $this->assertEquals($output, RunningAverage::apply($input, 2));
    }

    public function testNotFitWindow()
    {
        $input = array(0 => 0, 1 => 2, 3 => 3, 4 => 5, 5 => 3);
        $output = array(1 => 1,  4 => 4);
        $this->assertEquals($output, RunningAverage::apply($input, 2));
    }
}
