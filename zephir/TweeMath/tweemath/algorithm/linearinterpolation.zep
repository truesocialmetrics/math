namespace TweeMath\Algorithm;

class LinearInterpolation
{
    public static function apply(array input, nextPosition)
    {
        var y0, x0, y1, x1;
    
        if count(input) < 2 {
            return reset(input);
        }
        let y0 =  reset(input);
        let x0 =  key(input);
        let y1 =  end(input);
        let x1 =  key(input);
        return y0 + (y1 - y0) * (nextPosition - x0) / (x1 - x0);
    }

}