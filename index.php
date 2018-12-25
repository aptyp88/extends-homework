<?php
include_once 'classes/product.php';
include_once 'classes/book.php';
include_once 'classes/game.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home work extends</title>
</head>
<body>
    <?php
    $product = new Product('test', 20, 5);
    $product->showInfo();
    
    $book = new Book('Garry Potter', 100, 5, 'Veselka', 'Dj. Rouling', 2001);

    /*
    echo $book -> getYear();
    echo '<br>';
    echo $book -> getPrice();
    echo '<br>';
    echo $book -> getCount();
    echo '<br>';
    $book -> getIzd();
    // var_dump($book);
    echo '<br>';
    */

    $game = new Game('Ведьмак 3: Дикая охота', 562, 5, 'стратегия', '16');
    // echo '<br>';
    $book -> showInfo();
    echo '<br>';
    $game -> showInfo();
    ?>
</body>
</html>