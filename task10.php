<?php
    require_once 'connectDB.php';
    require_once 'functions.php';
?>

<!-- <pre> -->
    <?php 

        $data = get_data($link);

        // var_dump($data);
    ?>
<!-- </pre> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/task10.css">
</head>
<body>
    <div class="header">

    </div>
    <div class="container">

        <?php 
        foreach($data as $line): 
        ?>

        <div class="item1">
            <div class="product">

                <?=$line['product']?>

            </div>
            <div class="quantity">

                <?=$line['quantity']?>

            </div>
            <div class="unit">

                <?=$line['unit']?>
                
            </div>
        </div>
		
        </div>

        <?php 
            endforeach;
        ?>

    </div>
    <div class="footer">
        <div class="button">
            <a href="index.php">Обновить</a>
        </div>
    </div>
</body>
</html>