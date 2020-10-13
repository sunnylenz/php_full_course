<?php 
// any required values are going to be listed first
// order still matters 
function paint($room = "Parlor",$color = "red"){
    return "The color of the {$room} is {$color} . <br>";
}
echo paint();
echo paint("Bedroom", "blue");
echo paint("bedroom");
echo paint("bedroom", null);

?>