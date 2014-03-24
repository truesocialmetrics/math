<?php
namespace TweeMath\Algorithm;

class Derivative
{
    public static function apply(array $input, $eps = 1)
    {
        $diff = array();
        reset($input);
        $start  = key($input);
        end($input);
        $finish = key($input);
        for ($i = $start; $i <= $finish; $i = $i + 1) {
            if ($i>=$finish) break;
            if (!array_key_exists($i, $input)) continue;
            $value = self::diff($input, $i, $eps);
            $diff[$i] = $value;
        }
        return $diff;
    }

    private static function value(array $input, $x) 
    {
        if (array_key_exists($x, $input)) {
            return $input[$x];
        }
        end($input);
        $finish = key($input);
        for ($i = $x; $i < $finish; $i = $i + 1) {
            if (!array_key_exists($i, $input)) continue;
            return $input[$i];
        }
        return 0;
    }

    private static function diff($input, $x, $eps)
    {
        return (self::value($input, $x + $eps) - self::value($input, $x)) / $eps;
    }
}