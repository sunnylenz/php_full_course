<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions definition</title>
</head>
<body>
    <?php 
    function say_hello(){
        echo "Hello World! <br>";
    }
    say_hello(); 

    function say_hello_to($word){
        echo "Hello {$word}! <br>";
    }

    say_hello_to("world");
    say_hello_to("Sunny Lenz");
    say_hello_loudly();// this was called before it was defined
    // but the code remains valid since PHP pre - processes the page to find its functions
    // functions can be re-defined
    
    function say_hello_loudly(){
        echo "HELLO WORLD!!! <br>";
    }
    ?>
</body>
</html>