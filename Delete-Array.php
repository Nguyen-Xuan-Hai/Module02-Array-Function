<?php
function delArray($arr,$a){
    $arrLength = count($arr);

    for ($i = $arrLength; $i >=0; $i--){
        if ($arr[$i] === $a){
            array_splice($arr,$i,1);
        }
    }
    return$arr;
}
print_r(delArray([1,2,3,4,7,8,2,4,6,7,4,3],4));
