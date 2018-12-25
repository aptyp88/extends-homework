<?php

class Product
{
    private $title;
    protected $price;
    private $count;
    public static $currency = ' грн';
    public static $ct = ' шт';

    public function __construct($title, $price, $count)
    {
        $this -> title = $title;
        $this -> price = $price;
        $this -> count = $count;
    }

    public function getInfo()
    {
        return '
            
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
                    <td>'.$this->count . self::$ct   .'</td>
                </tr>
                <br>
            
        ';
    }

    public function showInfo()
    {
        echo '<table border="1">'.$this->getInfo().'</table>';

    }

    public function getPrice()
    {
        echo $this ->price . self:: $currency . '<br>';
    }

    public function getCount()
    {
        return $this ->count . self:: $ct . '<br>';
    }
}