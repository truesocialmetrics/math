<?php
namespace TweeMath\Algorithm;

class LocalExtremum
{
    public static function apply(array $input, $eps = 1)
    {
        $diff = Derivative::apply($input, $eps);
        $output = array();
        $_value = reset($diff);
        foreach ($diff as $position => $value) {
            if (self::extremum($_value, $value)) {
                $output[$position] = $value;
            }
            $_value = $value;
        }
        return $output;
    }

    public static function extremum($a, $b)
    {
        return ($a > 0 && $b <0) || ($a < 0 && $b > 0);
    }
}