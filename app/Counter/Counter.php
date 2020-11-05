<?php

namespace App\Counter;

class Counter{
    private $count = 0;

    public function increment()
    {
        $this->count += 1;    
        return $this;
    }

    public function count()
    {
        return $this->count;
    }
}