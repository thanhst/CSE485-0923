<?php
// $keys = array(
//     "field1" => "first",
//     "field2" => "second",
//     "field3" => "third"
// );
// $values = array(
//     "field1value" => "dinosaur",
//     "field2value" => "pig",
//     "field3value" => "platypus"
// );
// $key1=[];
// $key2=[];
// $keysAndValues = [];

// foreach ($keys as $key => $value) {
//     array_push($key1,$value);
// }

// foreach ($values as $key => $value) {
//     array_push($key2,$value);
// }
// foreach ($key1 as $index => $value1) {
//     if (isset($key2[$index])==true) {
//         $value2 = $key2[$index];
//         $keysAndValues[$value1] = $value2;
//     }
// }
// print_r($keysAndValues);
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array_combine($keys, $values);

print_r($keysAndValues);