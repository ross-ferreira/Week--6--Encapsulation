<?php

declare(strict_types=1);

namespace App\Counter; 

class Counter
{
    private $total=0;

    public function increment()
    {
    return $this->total +=1;
    }

    public function count()
    {
    return $this->total;
    }

}

// Create a class App\Counter\Counter which has an increment and count method. When you call count it should return the number of times that increment has been called.

// $counter = new Counter\Counter();
// $counter->increment();
// $counter->increment();
// $counter->increment();

// dump($counter->count()); // 3