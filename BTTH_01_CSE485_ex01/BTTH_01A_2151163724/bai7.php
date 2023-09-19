<?php 
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
foreach($array as $ele){
    if($ele>=100 && $ele<=200 && $ele%5==0){
        echo "$ele";
        echo "<br>";
    }
}
