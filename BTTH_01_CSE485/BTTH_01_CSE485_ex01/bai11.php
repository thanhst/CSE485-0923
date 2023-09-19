<?php
$array = array(1, 2, 3, 4, 5);
function Del3Element($arr)
{
    $arrnew=[];
    for($i=0;$i<count($arr);$i++){
        if($i==3)
        {
            $arr[$i]=null;
        }
    }
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]!=null)
        {
            array_push($arrnew,$arr[$i]);
        }
    }
    return $arrnew;
}
$arrs = Del3Element($array);
var_dump($arrs)
?>