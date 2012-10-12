<?php

$food = array('Pasta'=>300, 'Cheese'=>100, 'Bacon'=>489);

//Once we have allocated value
//echo $food[1].'<br />';

//associative array
echo $food['Pasta'].'<br />';

print_r($food);
echo '<br />';
$food[2] = 'Salad';
print_r($food);


//multi-dimensional arrays
$stuff = array('crap'=>array('salad', 'vege', 'sushi'), 'hoho'=>array('pizza', 'ice cream', 'coke'));
echo '<br />'.$stuff['crap'][0];


//foreach
foreach($stuff as $element => $inner_item){
    echo '<br /><b>'.$element.'</b><br />';
    foreach($inner_item as $item){
        echo 'item: '.$item.'<br />';
    }
}

?>
