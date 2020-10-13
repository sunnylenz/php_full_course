<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each Loops</title>
</head>
<body>
    <?php 
    $ages = array(4,8,15,16,23,42);
    foreach($ages as $age) {
        echo "Age:  {$age}<br>";
    }
    
    ?>

<br>
    <h1>Associative Arrays</h1>
    <?php 
    $person = array(
        "first_name" => "Lenz",
        "last_name" => "Sunny",
        "address" => "pmb 2000",
        "city" => "Owerri",
        "state" => "Imo",
        "zip_code" => "46001",
    );
    foreach($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data}<br>";
    }
    
    ?>


<br>
    <h2>One more Associative array example</h2>

    <?php 
    $prices = array(
        "Brand New Computer" => 2000,
        "1 month of Lynda.com" => 25,
        "Learning PHP" => null,
        
    );
    foreach($prices as $item => $price) {
       echo "{$item}: ";
       if (is_int($price)){
           echo "$" . $price;
       }else {
           echo "Priceless";
       }
       echo "<br>";
    }
    
    ?>
</body>
</html>