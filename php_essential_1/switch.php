<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

    <?php 

    // switch is preferable when testing multiple cases...
    // variable value becomes one of the cases
    // variable name becomes switch argument
    $a = 3;
    switch ($a) {
        case 0:
            echo " a equals to 0 <br />";
            break;

        case 1:
            echo " a equals to 1 <br />";
            break;
        case 2:
            echo " a equals to 2 <br />";
            break;
        case 3:
            echo " a equals to 3 <br />";
            break;
        
        default:
            echo "No option selected";
            break;
    }
    
    ?>

    <?php
    // Chineese Zodiac
    // White spaces doesnt matter
    // colons,semi colons and breaks do...

    $year = 2020;

    switch (($year - 4) % 12) {
        case 0: $zodaic = "Rat"; break;
        case 1: $zodaic = "Ox"; break;
        case 2: $zodaic = "Tiger"; break;
        case 3: $zodaic = "Rabbit"; break;
        case 4: $zodaic = "Dragon"; break;
        case 5: $zodaic = "Snake "; break;
        case 6: $zodaic = "Horse"; break;
        case 7: $zodaic = "Goat"; break;
        case 8: $zodaic = "Monkey"; break;
        case 9: $zodaic = "Rooster"; break;
        case 10: $zodaic = "Dog"; break;
        case 11: $zodaic = "Pig"; break;
    }

    echo "{$year} is a year of {$zodaic} <br>";
    ?>

    <?php 
    $user_type = "customer";
    switch ($user_type) {
        case 'student':
            echo "You are welcome {$user_type}";
            break;
        case 'press':
            echo "Greetings {$user_type}";
            break;

        case 'customer':
            echo "Hello {$user_type}";
            break;
        default:
            echo "not customer, student or press";
            break;
    }
    
    ?>


<?php 
// making multiple test cases do same thing
    $user_type = "customer";
    switch ($user_type) {
        case 'student':
            echo "You are welcome {$user_type}";
            break;
        case 'press':
            echo "Greetings {$user_type}";
            break;

        case 'customer':
            echo "Hello {$user_type}";
            break;
        default:
            echo "not customer, student or press";
            break;
    }
    
    ?>

    
</body>
</html>