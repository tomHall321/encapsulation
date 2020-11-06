<?php

namespace App\Library;


class Book
{
    private $title;
    private $numPages;
    private $bookLocation = 1;

    public function __construct($title, $numPages)
    {
        $this->title = $title;
        $this->numPages = $numPages;
    }

    public function read($additionalPagesRead)
    {
        $this->bookLocation = $this->bookLocation + $additionalPagesRead;
    }

    public function currentPage()
    {
        return $this->bookLocation;
    }

    public function title() : string
    {
        return $this->title;
    }

}