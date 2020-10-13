<?php 
function add($val1, $val2){
    $sum = $val1 + $val2;
    return $sum;
}

$result = add(4,6);
echo $result . "<br>";

function chinese_zodiac($year){
    switch (($year - 4) % 12) {
        case 0: return 'Rat';
        case 1: return 'Ox';
        case 2: return 'Tiger';
        case 3: return 'Rabbit';
        case 4: return 'Dragon';
        case 5: return 'Snake';
        case 6: return 'Horse';
        case 7: return 'Goat';
        case 8: return 'Monkey';
        case 9: return 'Rooster';
        case 10: return 'Dog';
        case 11: return 'Pig';
    }
}

$zodiac = chinese_zodiac(2020);
echo $zodiac;
?>