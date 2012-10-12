<?php
/*
Infinite loop
while(1){
	echo 'Hello<br />';
}
*/

//While
$counter = 1;
while($counter <= 10){
echo $counter.' Hello <br />';
$counter++;
}

//Do while
$counter2 = 1;
do{
	echo $counter2.' This will ALWAYS show<br />';
	$counter2++;
}while($counter2<=10);
//0 means it's not going to show but do always show once first

//Forloop
for($counter3 = 1; $counter3 <= 10; $counter3++){
	     echo $counter3.' For loop hello<br />';
}

?>