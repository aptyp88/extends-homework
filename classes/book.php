<?php

class Book extends Product
{
    private $izd;
    private $author;
    private $year;

    public static $y = ' г.';


    public function __construct($title, $price, $count, $izd, $author, $year)
    {
        parent::__construct($title, $price, $count);

        $this -> izd = $izd;
        $this -> author = $author;
        $this -> year = $year;
    }

    public function getYear()
    {
        echo $this -> year . self:: $y . '<br>';
    }

    public function getIzd()
    {
        echo $this -> izd;
    }

    public function getAuthor()
    {
        echo $this -> author;
    }

}