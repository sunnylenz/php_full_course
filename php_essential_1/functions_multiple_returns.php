<?php 
function add_subt($val1,$val2){
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    //since functions can only return one value
    // we use array to return multiple values...
    return array($add, $subt);
}
$result_array = add_subt(10,5);
echo "Add: " . $result_array[0] . "<br>";
echo "Subt: " . $result_array[1] . "<br>";

list($add_result, $subt_result) = add_subt(20,7);
echo "Add: " . $add_result . "<br>";
echo "Subt: " . $subt_result . "<br>";
?>