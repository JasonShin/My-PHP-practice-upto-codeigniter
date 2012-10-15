<?php
$count = 1;
$readin = file('name.txt');
$readin_count = count($readin);
foreach($readin as $fname){
    echo trim($fname);
    if($count<$readin_count){
        echo ', ';
    }
    $count++;
}
?>
