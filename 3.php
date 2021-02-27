<?php 

$str = '*' ; 
for($i = 0 ; $i <= 5 ; $i++ ){
    echo str_repeat($str , $i) . '<br>'; 
    if($i == 5){
        for($t = 5 ; $t > 0 ;  $t-- ){
            echo str_repeat($str , $t) . '<br>'; 
        }
    }
}

?> 