<?php

$string = 'this is a string.';
if (preg_match('/is/', $string)) {
    echo 'Matching string found!';
} else {
    echo 'Couldn\'t find matching string!';
}
?>
