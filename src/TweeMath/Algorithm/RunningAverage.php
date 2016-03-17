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
            $variable = array_sum($aggregation) / count($aggregation);
            $output[$position] = $variable;
            $aggregation = array();
        }
        return $output;
    }
}