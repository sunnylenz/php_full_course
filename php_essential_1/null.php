<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null</title>
</head>
<body>
    <?php 
    // null is a fancy term for nothing...for not having a value.its not zero,its not string,its just lack of a value

     $var1 = null;
     $var2 = "";
    
    ?>
    Var1 null? <?php echo is_null($var1); ?><br>
    Var2 null? <?php echo is_null($var2); ?><br>
    Var3 null? <?php echo is_null($var3); ?><br>

    Var1 is set? <?php echo isset($var1); ?><br>
    Var2 is set? <?php echo isset($var2); ?><br>
    Var3 is set? <?php echo isset($var3); ?><br>

    <?php $var3 = "0" ?>
<!-- Empty: "", null, 0, 0.0, "0", false, array() -->
    Var1 empty? <?php echo empty($var1); ?><br>
    Var2 empty? <?php echo empty($var2); ?><br>
    Var3 empty? <?php echo empty($var3); ?><br>
</body>
</html>