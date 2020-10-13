<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop...</title>
</head>
<body>
<h1>Basic Loop</h1>
    <?php 
    
    // loops allows us write codes that will execute more than once without writing that code oeer  and over again
    // its another form of control structure that makes a program take decision
    // Syntax 4 while loop
    /* 
    while (expression)
        statement;
    */
    $count = 1;
    while ($count <= 10) {
        echo "{$count} <br>";
        $count++;
    }
    
    ?>
<!-- bit more complex -->
<h1>Does a different stuff @five</h1>
    <?php 
     $count = 0;
     while ($count <= 10) {
         if ($count == 5){
            echo "Five, ";
         } else {
             echo $count . ", ";
         }
        
        //  echo "{$count} <br>";
         $count++;
     }
     echo "<br>";
     echo "Count: {$count}";
     echo "<br>";
    ?>


<!-- determining modulo -->
<h1>Modulo result</h1>

<?php 

     $count = 0;
     while ($count <= 10) {
         if ($count % 2 == 0){
            echo "{$count} is even, ";
         } else {
             echo " {$count} is odd" . ", ";
         }
        
        //  echo "{$count} <br>";
         $count++;
     }
     echo "<br>";
     echo "Count: {$count}"
    ?>
</body>
</html>