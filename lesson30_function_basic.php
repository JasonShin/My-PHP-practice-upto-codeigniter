<?php

function myName () {
    echo 'Jason!<br />';
}
myName();

function add($number1, $number2){
    echo 'Added!: '.($number1 + $number2);
}
add(123, 23223124124125356235);

//returning
function multiply($num1, $num2){
    return $num1 * $num2;
}
echo '<br />'.  multiply(33, 11);
?>
