<?php

namespace App\Counter;

class Counter{

    private $count = 0;

    public function increment() : self
    {
        $this->count += 1;    
        return $this;
    }

    public function count() : int
    {
        return $this->count;
    }
}