<?php
// Merge Two Arrays and Remove Duplicates
function mergeArraysUnique($array1, $array2){
    $len = count($array1);
    $len1 = count($array2);
    $mergedArr = [];
    if($len1 > $len)
        $len = $len1;

    for($i = 0; $i < $len; $i++){
        if(isset($array1[$i]) && !in_array($array1[$i], $mergedArr)){
            $mergedArr[] = $array1[$i];
        }
        if(isset($array2[$i]) && !in_array($array2[$i], $mergedArr)){
            $mergedArr[] = $array2[$i];
        }
    }
    return $mergedArr;
}
$array1 = [1, 2, 3, 4, 10];
$array2 = [3, 4, 5, 6, 11, 12, 10, 13];
$result = mergeArraysUnique($array1, $array2);
print_r($result);