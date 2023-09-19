<?php
$array1 = [
    [77, 87],
    [23, 45]
   ];
$array2 = [
    'giá trị 1', 'giá trị 2'
   ];
$array = [];
foreach ($array1 as $index => $subArray) {
     $array[$index] = array_merge($subArray,[$array2[$index]]);
   }
var_dump($array);
