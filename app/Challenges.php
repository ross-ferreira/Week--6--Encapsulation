<?php

declare(strict_types=1);

namespace App; 

class challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        $this-> counter();
        $this->beanCounter();
    }

    public function counter()
    {
        echo "\n01)\n";

        $counter = new Counter\Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();

        dump($counter->count()); // 3
    }
 
    public function beanCounter()
{
    echo "\n02)\n";

    $counter = new Counter\Counter();
    $beans = new Counter\BeanCounter($counter);
    $beans->addBean()->addBean();

    dump($beans->howMany()); // 2

    // don't worry too much about what this bit of code does
    // you just want it to echo "Not accepted. Good work!"
    // if you try to pass anything other than a Counter to BeanCounter
    try {
        new Counter\BeanCounter(12);
        dump("Accepted. Oops!"); // if you see this, something's not right
    } catch (\TypeError $e) {
        dump("Not accepted. Good work!"); // if you see this, you've done it right
    }
}

}