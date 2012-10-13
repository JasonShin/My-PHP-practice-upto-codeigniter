<?php

//this is pattern matching
$string = 'this is a string.';
if (preg_match('/is/', $string)) {
    echo 'Matching string found!';
} else {
    echo 'Couldn\'t find matching string!';
}

function has_space($string){
    if(preg_match('/ /', $string)){
        return true;
    } else {
        return false;
    }
}
echo 'Does it have space?: '.has_space('thisdoesnthavespaceijdasidj').'<br />';

echo 'Does it have space?: '.has_space('thi    s  o  snthavespaceijdasidj').'<br />';
?>
