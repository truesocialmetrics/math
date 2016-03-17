namespace TweeMath\Algorithm;

class RunningAverageEdge
{
    public static function apply(array input, windowSize)
    {
        var output, y, x, aggregation;
    
        let output =  RunningAverage::apply(input, windowSize);
        // start
        let y =  reset(input);
        let x =  key(input);
        let output[x] = y;
        if count(input) % windowSize != 0 {
            // finish
            //$y = end($input);
            //$x = key($input);
            //$output[$x] = $y;
            let aggregation =  array_slice(input, floor(count(input) / windowSize) * windowSize);
            end(input);
            let x =  key(input);
            let y =  array_sum(aggregation) / count(aggregation);
            let output[x] = y;
        }
        ksort(output);
        return output;
    }

}