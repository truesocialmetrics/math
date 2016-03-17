namespace TweeMath\Algorithm;

use InvalidArgumentException;
class TrigonometricInterpolation
{
    public static function apply(array input, nextPosition)
    {
        var y0, x0, y1, x1, y;
    
        if empty(input) {
            return 0;
        }
        if count(input) < 2 {
            return reset(input);
        }
        let y0 =  reset(input);
        let x0 =  key(input);
        let y1 =  end(input);
        let x1 =  key(input);
        let y =  y0 + (y1 - y0) * (nextPosition - x0) / (x1 - x0);
        return y * (sin(nextPosition) / 2 + 1);
    }

}