<?php
$arr=[2,5,6,9,2,5,6,12,5];
$tong=0;
$tich=1;
$hieu;
$thuong;
for($i=0;$i<count($arr);$i++){
    $tong+=$arr[$i];
    $tich*=$arr[$i];
    if($i==0){
        $hieu=$arr[$i];
        $thuong=$arr[$i];
    }
    else{
        $hieu-=$arr[$i];
        $thuong/=$arr[$i];
    }
}
$thuong=number_format($thuong,100);
echo "Tổng các phần tử = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = $tong";
echo "<br>";
echo "Tích các phần tử = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = $tich";
echo "<br>";
echo "Hiệu các phần tử = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = $hieu";
echo "<br>";
echo "Thương các phần tử = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = $thuong";