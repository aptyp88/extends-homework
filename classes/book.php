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
        return $this -> year . self:: $y . '<br>';
    }

    public function getIzd()
    {
        return $this -> izd;
    }

    public function getAuthor()
    {
        return $this -> author;
    }

    public function showInfo()
    {
        $tb = parent::getInfo();
        
        echo '<table border="1">' . $tb .  '
            <tr>
                <th>Издательство</th>
                <td>' . $this -> getIzd() . '</td>
            </tr>
            <tr>
                <th>Автор</th>
                <td>' . $this -> getAuthor() . '</td>
            </tr>
            <tr>
                <th>Год выпуска</th>
                <td>' . $this -> getYear() .'</td>
            </tr>
            </table>
        ';
        
    }

}