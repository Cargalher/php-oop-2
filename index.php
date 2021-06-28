
<?php
include __DIR__. '/class/oop.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online-shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
    <header class="container">
    <h1>Shop Items</h1>
    <i class="fas fa-shopping-cart"></i>
    </header>
    <main>
    <div class="container d_flex">
        <div class="item_one">
            <?php 
                echo $phone->getName();
                echo $phone->printProduct();
                echo $phone->getPrice();
            ?>
        </div>
        <div class="item_two">
            <?php 
                echo $watch->getName();
                echo $watch->printProduct();
                echo $watch->getPrice();
            ?>
        </div>
    
    </div>
        
        
    </main>
</body>
</html>