<?php 
$arrs1 = ['1', 'B', 'C', 'E'];
$arrs2 = ['a', 0, null, false];
function convertToLowercase($arr) {
    $result = [];
    foreach ($arr as $item) {
      if (is_string($item)) {
        $result[] = strtoupper($item);
      } else {
        $result[] = $item;
      }
    }
    return $result;
}
$result1 = convertToLowercase($arrs1);
$result2 = convertToLowercase($arrs2);
var_dump($result1);
echo "<br>";
var_dump($result2);


