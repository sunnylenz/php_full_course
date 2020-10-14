<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type juggling and casting</title>
</head>
<body>

Type juggling <br>
    <?php 
    $count = "2 Cats";
    ?>
    Type: <?php echo gettype($count); ?><br>

    <?php 
    $count += 3;
    ?>
    Type: <?php echo gettype($count); ?><br>

    <?php $cats = "I have " . $count . " cats. "; ?><br>
    Cats: <?php echo gettype($cats); ?><br>


    Type Casting<br>
<?php settype($count, "integer"); ?>
Count: <?php echo gettype($count); ?><br>

<?php $count2 = (string) $count; ?>
Count: <?php echo gettype($count); ?><br>
Count2: <?php echo gettype($count2)?> <br>


<?php $test1 = 3; ?>
<?php $test2 = 3; ?>

<?php settype($test1, "string"); ?>
<?php (string) $test2; ?>

TEST1: <?php echo gettype($test1); ?><br>
TEST2: <?php echo gettype($test2); ?><br>


</body>
</html>