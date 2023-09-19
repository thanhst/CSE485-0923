<?php 
$numbers = [
 'key1' => 12,
 'key2' => 30,
 'key3' => 4,
 'key4' => -123,
 'key5' => 1234,
 'key6' => -12565,
];
echo "Phần tử đầu tiên là ".$firtKey=reset($numbers)."<br>";
echo "Phần tử cuối cùng là ".$lastKey=end($numbers)."<br>";
echo "Phần tử lớn nhất là ".$maxValue=max($numbers)."<br>";
echo "Phần tử bé nhất là ".$minValue=max($numbers)."<br>";
echo "Tổng là ".$sum=array_sum($numbers);