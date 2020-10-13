<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue...</title>
</head>
<body>
    <?php 
    for ($count=1; $count <= 10; $count++) { 
        # code...
        if ($count == 5) {
            # code...
            continue;
        }
        echo $count . ", ";
    }
    
    ?>

    <br>
<h2>normal use of continue in for loop</h2>
    <?php 
    for ($count=1; $count <= 10; $count++) { 
        # code...
        if ($count % 2 == 0) {
            # code...
            continue;
        }
        echo $count . ", ";
    }
    
    ?>

    <br>
<h2>fixing continue bug in while loop</h2>
    <?php 
    $count = 0;
    while ($count <= 10) { 
        if ($count == 5) {
            $count++; //This solves the infinte loop caused by the code below
            continue;// This is will cause infinite loop
        }
        echo $count . ", ";
        $count++;
    }
    
    ?>

    <br>
    <h2>Loop inside loop with continue</h2>
    <?php 
    for ($i=0; $i <= 5 ; $i++) { 
        # code...
        if ($i % 2 == 0){continue(1);}
        for ($k = 0; $k <= 5; $k++) {
            if ($k == 3) {
                continue(2);
            }
            echo $i . "_" . $k . "<br>";
        }
    }
    ?>
</body>
</html>