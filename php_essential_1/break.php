<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break</title>
</head>
<body>
    <?php 
    // break stops all execution and not only the current iteration as is the case with continue 
    for ($count=0; $count <= 10 ; $count++) { 
        if ($count == 5) {
        break;
        }
        echo $count . ", ";
    }
    ?>

<br>
<h2>Break for loop in a loop</h2>
<?php 
    for ($i=0; $i <= 5 ; $i++) { 
        # code...
        if ($i % 2 == 0){continue(1);}
        for ($k = 0; $k <= 5; $k++) {
            if ($k == 3) {
                break(2);
            }
            echo $i . "_" . $k . "<br>";
        }
    }
    ?>
</body>
</html>