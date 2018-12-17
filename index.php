<?php
include_once 'product.php';
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
    echo $product;


    ?>
</body>
</html>