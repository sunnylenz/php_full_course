<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
<p>An associative array is an object-indexed collection of objects.When order matters to us, we use array_search
but when the order is not important,we use associative array.
</p>
    <?php 
    $assoc = ["first_name" => "Sunny", "last_name" => "Lenz"];
    
    ?>

    <?php echo $assoc["first_name"]; ?><br>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br>

    <?php echo $assoc["first_name"] = "Larry"; ?> 
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br> = Larr
</body>
</html>