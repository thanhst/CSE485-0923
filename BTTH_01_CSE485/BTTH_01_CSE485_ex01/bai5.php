<?php
$arr = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];
foreach ($arr as $keys => $values) {
    if ($keys == "a") {
        echo "Mảng $keys :";
        var_dump($values);
        echo "<br>";
    }
    if (is_array($values)) {
        foreach ($values as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $keyss => $valuess) {
                    if ($keyss == "a") {
                        echo "Mảng $keyss :";
                        var_dump($valuess);
                        echo "<br>";
                    }
                    if ($keyss == 'b' && $valuess == 3) {
                        echo "$keyss có giá trị là $valuess";
                        echo "<br>";
                    }
                    if ($keyss == 'c' && $valuess == 1) {
                        echo "$keyss có giá trị là $valuess";
                        echo "<br>";
                    }
                }
            } else {
                if ($key == "a") {
                    echo "Mảng $key :";
                    var_dump($value);
                    echo "<br>";
                }
                if ($key == 'b' && $value == 3) {
                    echo "$key có giá trị là $value";
                    echo "<br>";
                }
                if ($key == 'c' && $value == 1) {
                    echo "$key có giá trị là $value";
                    echo "<br>";
                }
            }
        }
    }
}
