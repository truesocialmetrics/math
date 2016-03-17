<?php
namespace TweeMath\Algorithm;

class RunningAverageEdge
{
    public static function apply(array $input, $windowSize)
    {
        $output = RunningAverage::apply($input, $windowSize);

        // start
        $y = reset($input);
        $x = key($input);
        $output[$x] = $y;

        if (count($input) % $windowSize != 0) {
            // finish
            //$y = end($input);
            //$x = key($input);
            //$output[$x] = $y;
            $aggregation = array_slice($input, floor(count($input) / $windowSize) * $windowSize);
            end($input);
            $x = key($input);
            $y = array_sum($aggregation) / count($aggregation);
            $output[$x] = $y;
        }

        ksort($output);

        return $output;
    }
}