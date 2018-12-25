<?php
include_once 'classes/product.php';
include_once 'classes/book.php';
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
    echo $product->showInfo();
    
    $book = new Book('Garry Potter', 100, 2005, 'Veselka', 'Dj. Rouling');

    $book -> getYear();
    echo '<br>';
    $book -> getPrice();
    // $book -> getCout();
    var_dump($book);
    ?>
</body>
</html>