<?php

class Book extends Product
{
    private $izd;
    private $author;
    private $year;

    public static $y = ' г.';


    public function __construct($izd, $author, $year)
    {
        $this -> izd = $izd;
        $this -> author = $author;
        $this -> year = $year;
    }

    public function getYear()
    {
        echo $this -> year . self:: $y;
    }

}