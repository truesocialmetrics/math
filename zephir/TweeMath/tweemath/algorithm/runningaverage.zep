namespace TweeMath\Algorithm;

class RunningAverage
{
    public static function apply(array input, windowSize)
    {
        var output, aggregation, position, value, variable;
    
        let output =  [];
        let aggregation =  [];
        for position, value in input {
            let aggregation[] = value;
            if count(aggregation) < windowSize {
                continue;
            }
            let variable =  array_sum(aggregation) / count(aggregation);
            let output[position] = variable;
            let aggregation =  [];
        }
        return output;
    }

}