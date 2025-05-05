<?php
/*$f = "Fizz";
$b = "Buzz";
$fb = "FizzBuzz";


for($i =1; $i <= 50; $i++){
    if($i % 3 == 0){
        echo $f . '<br />';
    }
    else if($i % 5 == 0){
        echo $b . '<br />';
    }
    else if($i % 15 == 0){
        echo $fb . '<br />' ;
    }
    else{
        echo $i;
    }
}*/

for($i = 1; $i < 6; $i++){
    for($j = 1; $j < 6; $j++){
        echo "●";
    }
    echo "<br />";
}