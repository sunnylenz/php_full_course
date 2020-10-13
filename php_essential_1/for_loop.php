<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>
<body>
    <?php 
    for ($count=0; $count <= 10; $count++) { 
        # code...
        echo $count . ", ";
    }
    ?>
    <br>


<h1>increament with test condition</h1>
    <?php 
    for ($count=1; $count <= 20; $count++) { 
        # code...
        if ($count % 2 == 0) {
            # code...
            echo "{$count} is even. <br>";
        } else {
            # code...
            echo "{$count} is odd. <br>";
        }
    }
    ?>


    
<h1>Decrement with test condition</h1>
<?php 
    for ($count=20; $count > 0; $count--) { 
        # code...
        if ($count % 2 == 0) {
            # code...
            echo "{$count} is even. <br>";
        } else {
            # code...
            echo "{$count} is odd. <br>";
        }
    }
    ?>

</body>
</html>