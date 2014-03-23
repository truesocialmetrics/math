<?php
namespace TweeMath\Algorithm;

class RunningAverage
{
    public static function apply(array $input, $windowSize)
    {
        $output = array();
        $aggregation = array();
        foreach ($input as $position => $value) {
            $aggregation[] = $value;
            if (count($aggregation) < $windowSize) continue;
            $output[$position] = array_sum($aggregation) / count($aggregation);
            $aggregation = array();
        }
        return $output;
    }
}