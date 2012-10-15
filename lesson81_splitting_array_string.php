<?php
$names_array = array('Jason','Alex','Bucky');
$string = implode(', ', $names_array);
echo $string.'<br />';

$new_array = explode(', ', $string);
foreach($names_array as $name){
    echo $name.'<br />';
}
?>
