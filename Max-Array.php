<?php
function maxArray($arr){
    $max = $arr[0][0];
    $arrLength = count($arr[0]);
    for ($i = 0; $i < $arrLength; $i++){
        for ($j = 0; $j < count($arr[$i]); $j++){
            if ($max < $arr[$i][$j]){
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
echo maxArray([[5,2,7,8,-1,8,-10],[2,10,70,4,-6,20,-20],[4,3,15,75,86,70,50]]);
