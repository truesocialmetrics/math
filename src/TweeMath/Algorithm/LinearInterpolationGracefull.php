<?php
namespace TweeMath\Algorithm;

class LinearInterpolationGracefull
{
    public static function apply(array $input, $nextPosition)
    {
        if (count($input) < 2) {
            return reset($input);
        }
        $y0 = reset($input);
        $x0 = key($input);
        $y1 = end($input);
        $x1 = key($input);

        $minY = min([$y0, $y1]);
        $minX = min([$x0, $x1]);

        $y0 = $y0 - $minY;
        $y1 = $y1 - $minY;
        $x0 = $x0 - $minX;
        $x1 = $x1 - $minX;

        $nextPosition = $nextPosition - $minX;
        $y = LinearInterpolation::apply([$x0 => $y0, $x1 => $y1], $nextPosition);
        return $y + $minY;
    }
}