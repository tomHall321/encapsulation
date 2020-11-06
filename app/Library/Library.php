<?php

namespace App\Library;


class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function titles() : array
    {
        $arrayOfTitleArrays = $this->shelves->map(fn($shelf)=> $shelf->titles());
        $oneArray = [];
        foreach($arrayOfTitleArrays as $shelf) 
        {
        $oneArray = array_merge($output, $shelf);
        }
        return $oneArray;

    }
}