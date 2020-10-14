<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
<?php $numbers = array(8,23,15,42,16,4); ?><br>
Count     :  <?php echo count($numbers); ?><br>
Max Value :  <?php echo max($numbers); ?><br>
Min Value :  <?php echo min($numbers); ?><br>
<pre>
Sort      :  <?php sort($numbers); print_r($numbers) ?><br>
REverse Sort      :  <?php rsort($numbers); print_r($numbers) ?><br>

</pre>

<h3>turning array into a string</h3>
Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br>
Explode: <?php print_r(explode(" * ", $num_string)); ?><br>
 
<h3>Function to check if a value is contained in an array</h3>
15 in array?: <?php echo in_array(15,$numbers); // returns T/F ?><br>
19 in array?: <?php echo in_array(19,$numbers); // returns T/F ?><br>
</body>
</html>