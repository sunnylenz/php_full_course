<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pointers</title>
</head>
<body>
    <?php 
    
    $ages = array(4,8,15,15,23,42);
    // current: current pointer value
    echo "1: " . current($ages) . "<br>";
    // we can manually tell the pointer to move to the newxt value
    next($ages);
    echo "2: " . current($ages) . "<br>";

    next($ages);
    echo "3: " . current($ages) . "<br>";

    next($ages);
    echo "4: " . current($ages) . "<br>";

    next($ages);
    echo "5: " . current($ages) . "<br>";

    reset($ages);
    echo "6: " . current($ages) . "<br>";

    prev($ages);
    echo "7: " . current($ages) . "<br>";

    end($ages);
    echo "8: " . current($ages) . "<br>";

    ?>

    <br>
    <h2>While loop that moves array pointer</h2>
    <?php
    //similar to foreach loop
    reset($ages);
    while($age = current($ages)){
        echo $age . ", ";
        next($ages);
    }
    ?>
</body>
</html>