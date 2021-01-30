<?php
function minArray($arr){
    $min = $arr[0];
    $arrLength = count($arr);

    for ($i =0; $i< $arrLength;$i++){
        if ($min > $arr[$i]){
            $min = $arr[$i];
        }
    }
    return $min;
}
echo minArray([5,-9,56,-12,40,53,-100]);