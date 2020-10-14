<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    
<?php 
$first = "The quick brown fox";
$second = " jumped over tha lazy dog";
$third = $first;
$third .= $second;
echo $third;
?>
<br>
<!-- Calling one function on the result of another function -->
<!-- echo is a function and strtoupper,strtolower,ucfirst,ucwords are also functions too -->
Lowercase: <?php echo strtolower($third); ?><br> 
Uppercase: <?php echo strtoupper($third); ?><br>
Uppercase first: <?php echo ucfirst($third); ?><br>
Uppercase words: <?php echo ucwords($third); ?><br>

<br>
Length: <?php echo strlen($third); ?><br>
Trim: <?php echo "A" . trim("B C D ") . "E"; ?><br> <!--trim removes the leading or trailing white space -->
Find: <?php echo strstr($third, "brown"); ?> <br>
Replace by String: <?php echo str_replace("quick","super-fast", $third); ?><br>

<br>
Repeat: <?php echo str_repeat($third, 2); ?><br>
Make sub-string: <?php echo substr($third, 5, 10); ?><br>
Find Position: <?php echo strpos($third, "brown"); ?><br>
find Character: <?php echo strchr($third, "z"); ?><br>
</body>
</html>

