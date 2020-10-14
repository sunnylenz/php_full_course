<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h3>Arrays are ordered,integer-indexed collection of objects</h3>
    <?php 
    $numbers = [4,8,15,16,23,42];
    echo $numbers[1];
    ?>
<br>
<?php 
// The power of arrays is that a set of information can be referenced by single variable
    $mixed = array(4,"fox","dog", array("x", "y", "z"));
    echo $mixed[2];
    // echo $mixed[3];
    // echo $mixed;
?>

<br>
<?php 
echo $mixed[3][1];
?><br>


<?php echo $mixed[2] = "Cat"; ?>
<?php echo $mixed[4] = "Mouse"; ?>
<?php echo $mixed[] = "House "; ?>


<pre>
<?php 
echo print_r($mixed);
?>
<pre>

</body>
</html>