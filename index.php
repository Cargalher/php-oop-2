
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
</head>
<body>
    <header>
    <h1>Shop Items</h1>
    </header>
    <main>
        <div class="item_one">
        <?php 
         echo $producer->printProduct();
         ?>
        </div>
        <div class="item_two">
        </div>
    </main>
</body>
</html>