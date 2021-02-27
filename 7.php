<?php 
$x = 3 ; 
$y=$x++; // y = 3 && x = 4 because using Post-increment	
$y+= ++$x; // y  = 3 + 5 = 8 && x = 5 because using pre-increment	
if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
}
else if ($y == 8){ // This is Will be Run 
 	$x--; 
 	echo $x ."<br>"; // Will Print 4 because usigng Post-decrement
}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
else { 
	$x= 0;
	echo $x ."<br>"; 
}
?>
