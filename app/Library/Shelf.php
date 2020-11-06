<?php
declare(strict_types=1);
namespace App\Library;

class Shelf
{   
    private $books;

    public function __construct()
    {
        $this->books = collect();
    }

    public function addBook(Book $book) : Shelf
    {
        //having $book as an object instance of type Book means that this would NOT be passed $shelf->addBook(new Counter\BeanCounter(12));
        $this->books->push($book);
        return $this;
    }
    
    public function titles() : array
    {   
        return $this->books->map(function ($book) 
            {
            return $book->title();
        })->all();
    }
}

