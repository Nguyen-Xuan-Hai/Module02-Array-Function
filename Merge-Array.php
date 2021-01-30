<?php
function newArray($arr1,$arr2){
    $arr1Length = count($arr1);
    $arr2Length = count($arr2);
    $arr3 = [];
    $arr3Length = $arr1Length + $arr2Length;
    for ($i =0;$i < $arr1Length;$i++){
        $arr3[$i] = $arr1[$i];
        $index = $i;
    }
    for ($j = $index + 1,$i = 0; $j < $arr3Length, $i < $arr2Length;$i++,$j++){
        $arr3[$j] = $arr2[$i];
    }
    print_r($arr3);
    return $arr3;
}
newArray([2,4,5,75,88],[3,6,7,4,84,90]);