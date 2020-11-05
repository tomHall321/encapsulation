<?php

namespace App\Counter;

class BeanCounter
{
    private $beanCounter;

    public function __construct(Counter $beanCounter) 
    //the new object instance is of type Counter)
    {
        $this->beanCounter = $beanCounter;
    } 

    public function addBean() : BeanCounter
    {
        $this->beanCounter->increment();
        //as counter is an object instance of type Counter we can access the increment method
        return $this;
    }

    public function howMany() : int
    {
        return $this->beanCounter->count();
        //as counter is an object instance of type Counter we can access the count method
    }
}