<?php
$num1 = '1';
$num2 = 1;

//But it matches
if($num1==$num2){
	echo 'Equals!';
} else {
       echo 'Not equal.';
}

//It doesn't match
if($num1===$num2){
	echo '<br />Equals';
} else {
       echo '<br />Not equals';
}

?>