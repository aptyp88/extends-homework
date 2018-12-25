<?php

class Game extends Product
{
    private $ganre;
    private $age;

    public function __construct($title, $price, $count, $ganre, $age)
    {
        parent::__construct($title, $price, $count);

        $this -> ganre = $ganre;
        $this -> age = $age;
    }

    public function getAge()
    {
        return '+' . $this -> age . '<br>';
    }

    public function getGanre()
    {
        return $this -> ganre . '<br>';
    }

    public function showInfo()
    {
        $tb = parent:: getInfo();

        echo '<table border="1">' . $tb . '
            <tr>
                <th>Жанр</th>
                <td>' . $this -> getGanre() . '</td>
            </tr>
            <tr>
                <th>Возраст</th>
                <td>' . $this -> getAge() . '</td>
            </tr>
        ';
    }
}