<?php

$string = 'This is the coolest string everr hahahaha! ha!';

//this will replace a part of string
$string_new = substr_replace($string, 'Jason', 27, 5);
echo 'New string! '.$string_new;

//replace that word
$new_string = str_replace('is', 'yo', $string);
echo '<br />After replacing is!: '.$new_string;

//replace by array
$find = array('is', 'string', 'ever');
$haha_string = str_replace($find, 'hoho', $string);
echo '<br />haha string: '.$haha_string;

?>
