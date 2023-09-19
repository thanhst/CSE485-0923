<?php 
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$max = strlen($array[0]);
$min = strlen($array[0]);
$eleMax;
$eleMin;
foreach($array as $ele){
    if(strlen($ele)>$max)
    {
        $eleMax=$ele;
        $max=strlen($ele);
    }
    if(strlen($ele)<$min){
        $eleMin=$ele;
        $min=strlen($ele);
    }
}
echo "Chuỗi lớn nhất là $eleMax, độ dài = $max <br>Chuỗi lớn nhất là $eleMin, độ dài = $min";