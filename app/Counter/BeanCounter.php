<?php

declare(strict_types=1);

namespace App\Counter; 

class BeanCounter
{

    private $counter;

    public function __construct(Counter $counter)
    {
        $this->counter=$counter;
    }

    public function addBean()
    {
         $this->counter->increment();
        return $this; //for chaining.......
    }

    public function howMany()
    {

        return $this->counter->count();

    }
}
