<?php

$offset = 0;
$find = 'is';
$find_length = strlen($find);
$string = 'This is a string!, and it is an example!';

//it finds number of words
echo 'String found!: ' . strpos($string, $find);

echo '<br />', strpos($string, $find, 10);

while ($string_position = strpos($string, $find, $offset)) {
    echo '<br /><strong>' . $find . '</strong>' . ' found at ' . $string_position . '<br />';
    $offset = $string_position + $find_length;
}
?>
