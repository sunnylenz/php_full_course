<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$number = 88;
$string = "Bug";
$array = array(1 => "HomePage", 2 => "About Us", 3 => "Services");
var_dump($number);
var_dump($string);
var_dump($array);
echo "Next bug usefuls <br>";
?>
<br>
<pre>
<?php 
//PHP does not have an official debugger
function say_hello_to($word){
    echo "Hello {$word}! <br>";
    
    var_dump(debug_backtrace());
}
say_hello_to("Everyone");

print_r(get_defined_vars());
?>
</pre>

<h2>Debugging Technigues</h2>
<pre>
echo $variable;       // variable value
print_r($array);      // prints readable array
gettype($variable);  // varable type
var_dump($variable); // variable type and value
get_defined_vars();  // array of defined variables
</pre>

<br>



</body>
</html>

