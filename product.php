<?php

class Product
{
    private $title;
    private $price;
    private $count;
    public static $currency = ' грн';
    public static $ct = ' шт';

    public function __construct($title, $price, $count)
    {
        $this -> title = $title;
        $this -> price = $price;
        $this -> count = $count;
    }

    public function __toString()
    {
        return '
            <table border="1">
                <tr>
                    <th>Название</th>
                    <td>'.$this->title.'</td>
                </tr>
                <tr>
                    <th>Цена</th>
                    <td>'.$this->price . self::$currency .'</td>
                </tr>
                <tr>
                    <th>Остаток на складе</th>
                    <td>'.$this->count . self::$ct .'</td>
                </tr>
            </table>

        ';
    }

    public function showInfo()
    {

    }
}