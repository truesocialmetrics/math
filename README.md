tt-math
=======
[![Build Status](https://travis-ci.org/necromant2005/tt-math.svg)](https://travis-ci.org/necromant2005/tt-math)

Introduction
------------

Standard Math Algorithms: Running Average, Linear Interpolation

Features / Goals
----------------

* Simple functional API
* Implementation Running Average with custom window size
* Implementation Running Average with custom window size and Edge binding
* Implementation Linear interpolation
* Implementation Derivative
* Implementation Local Extremum

Installation
------------

### Main Setup

#### With composer

1. Add this to your composer.json:

```json
"require": {
    "necromant2005/tt-math": "1.*",
}
```

2. Now tell composer to download TweeMath PHP SDK by running the command:

```bash
$ php composer.phar update
```

#### Usage

Running average using with window size = 2
```php
use TweeMath\Algorithm;

Algorithm\RunningAverage(array(0 => 0, 1 => 2, 3 => 3, 4 => 5, 5 => 3, 6 => 1), 2);
// array(1 => 1,  4 => 4, 6 => 2)
```

Running average using with window size = 2 and edges binding
```php
use TweeMath\Algorithm;

Algorithm\RunningAverageEdge(array(0 => 0, 1 => 2, 3 => 3, 4 => 5, 5 => 3), 2);
// array(0 => 0, 1 => 1,  4 => 4, 5 => 3)
```

Linear interpolation for the next point x=2
```php
use TweeMath\Algorithm;

Algorithm\LinearInterpolation(array(0 => 0, 1 => 1), 2); // 2
```

Derivative for input with epsilon = 1
```php
use TweeMath\Algorithm;

Algorithm\Derivative(array(0 => 0, 1 => 2, 4 => 5, 6 => 1), 1); 
// array(0 => 2, 1 => 3, 4 => -5)
```

Local Extremum's for input with epsilon = 1
```php
use TweeMath\Algorithm;

Algorithm\LocalExtremum(array(0 => 0, 1 => 2, 2 => 4,  3 => 3, 4 => 5, 5 => 3, 6 => 1), 1); 
// array(2 => -1, 3 => 2, 4 => -2)
```