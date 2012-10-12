<?php

$string = 'An example string!';


$word_count = str_word_count($string);  //counting words
echo 'Number of words: ' . $word_count . '<br />';

//arg 1 gets array
$word_count2 = str_word_count($string, 1);  //counting words
print_r($word_count2);

echo '<br />';
$word_count3 = str_word_count($string, 2);  //counting words
print_r($word_count3);

$string2 = 'Test string is awesome & cool .';

//takes &. and put them in to an array too
echo '<br />';
$word_count4 = str_word_count($string2, 1, '&.');  //counting words
print_r($word_count4);

//shuffling
echo '<br />';
$word_shuffle = str_shuffle($string2);
echo $word_shuffle;

//substring
echo '<br />';
$subs = substr($string2, 0, 10);
echo $subs;

//reversing
echo '<br />';
$string_reversed = strrev($string);
echo $string_reversed;

//similarity
echo '<br />';
$essay1 = 'This is my essay :), hahahahahahahahahahaha';
$essay2 = 'This is my essay :), hahahahaha';
similar_text($essay2, $essay1, $similarText);
echo 'Similar texts: '.$similarText;

//String length
echo '<br />';
$length = 'aifaiovgnaovnaiodnvaionvioanvioasnvioasnviasnv';

echo strlen($length);

//trim - removing spaces
echo '<br />';
$stringTest = '         asifnasnf      asofasojf    ';
$string_trimmed = trim($stringTest);
echo $string_trimmed;

echo '<br />';
echo ltrim($stringTest);
echo '<br />';
echo rtrim($stringTest);

//adding slashes to " and stuff
echo '<br />';
$stuff = 'This is a <img src="image.jpg" /> string.';
$string_slashes = htmlentities(addslashes($stuff));
echo $string_slashes;


echo '<br />';
?>
