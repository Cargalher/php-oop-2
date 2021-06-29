<?php
include __DIR__. '/class/product.php';
include __DIR__. '/class/customer.php';
include __DIR__. '/class/creditCard.php';
include __DIR__. '/class/premiumCustomer.php';
include __DIR__. '/database/db.php';
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
           
                <h1> <?php echo $phone->getName();?></h1> 
                <p class="feat"> <?php echo $phone->printProduct();?></p> 
                <p class="price"> <?php echo $phone->getPrice();?></p> 
            
        </div>
        <div class="item_two">
            
            <h1> <?php echo $watch->getName();?></h1>
            <p class="feat"> <?php echo $watch->printProduct();?></p>
            <p class="price"> <?php echo $watch->getPrice();?></p>
            
        </div>

        
    
    </div>
        
        
    </main>
</body>
</html>