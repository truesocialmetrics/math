namespace TweeMath\Algorithm;

class LocalExtremum
{
    public static function apply(array input, eps = 1)
    {
        var diff, output, _value, position, value;
    
        let diff =  Derivative::apply(input, eps);
        let output =  [];
        let _value =  reset(diff);
        for position, value in diff {
            if self::extremum(_value, value) {
                let output[position] = value;
            }
            let _value = value;
        }
        return output;
    }
    
    public static function extremum(a, b)
    {
        return a > 0 && b < 0 || a < 0 && b > 0;
    }

}