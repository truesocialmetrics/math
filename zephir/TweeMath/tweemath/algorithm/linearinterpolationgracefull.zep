namespace TweeMath\Algorithm;

class LinearInterpolationGracefull
{
    public static function apply(array input, nextPosition)
    {
        var y0, x0, y1, x1, minY, tmpArrayb464d18139077ac9d2ea65bc9d2319d4, minX, tmpArray2916e573eab3c840a86aebe27d6b5f30, y, tmpArray2d446d31f2de93bb4a5600b9dd8214fa;
    
        if count(input) < 2 {
            return reset(input);
        }
        let y0 =  reset(input);
        let x0 =  key(input);
        let y1 =  end(input);
        let x1 =  key(input);
        let tmpArrayb464d18139077ac9d2ea65bc9d2319d4 = [y0, y1];
        let minY =  min(tmpArrayb464d18139077ac9d2ea65bc9d2319d4);
        let tmpArray2916e573eab3c840a86aebe27d6b5f30 = [x0, x1];
        let minX =  min(tmpArray2916e573eab3c840a86aebe27d6b5f30);
        let y0 =  y0 - minY;
        let y1 =  y1 - minY;
        let x0 =  x0 - minX;
        let x1 =  x1 - minX;
        let nextPosition =  nextPosition - minX;
        let y =  LinearInterpolation::apply([x0 : y0, x1 : y1], nextPosition);
        return y + minY;
    }

}