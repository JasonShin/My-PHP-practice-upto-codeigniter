<?php

$directory = 'gallery';

if ($handle = opendir($directory . '/')) {
    echo 'worked<br />';
    while ($file = readdir($handle)) {
        //if ($file != '.' && $file != '..') {
        echo '<a href="' . $directory . '/' . $file . '">' . $file . '</a>' . '<br />';
        //}
    }
}
?>
