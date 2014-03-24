<?php
namespace TweeMath\Algorithm;
use PHPUnit_Framework_TestCase;

class LocalExtremumTest extends PHPUnit_Framework_TestCase
{
    public function testExtremum()
    {
        $input = array(0 => 0, 1 => 2, 2 => 4,  3 => 3, 4 => 5, 5 => 3, 6 => 1);
        $output = array(2 => -1, 3 => 2, 4 => -2);
        $this->assertEquals($output, LocalExtremum::apply($input, 1));
    }
}