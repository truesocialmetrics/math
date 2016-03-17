namespace TweeMath\Algorithm;

class Derivative
{
    public static function apply(array input, eps = 1)
    {
        var diff, start, finish, i, value;
    
        let diff =  [];
        reset(input);
        let start =  key(input);
        end(input);
        let finish =  key(input);
        let i = start;
        for i in range(start, finish) {
            if i >= finish {
                break;
            }
            if !(array_key_exists(i, input)) {
                continue;
            }
            let value =  self::diff(input, i, eps);
            let diff[i] = value;
        }
        return diff;
    }
    
    protected static function value(array input, x)
    {
        var finish, i;
    
        if array_key_exists(x, input) {
            return input[x];
        }
        end(input);
        let finish =  key(input);
        let i = x;
        for i in range(x, finish) {
            if !(array_key_exists(i, input)) {
                continue;
            }
            return input[i];
        }
        return 0;
    }
    
    protected static function diff(input, x, eps)
    {
        return (self::value(input, x + eps) - self::value(input, x)) / eps;
    }

}