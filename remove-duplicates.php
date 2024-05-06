<?php
/* Remove Duplicates from Sorted Array
Input: nums = [1,1,2]
Output: 2, nums = [1,2,_]

Input: nums = [0,0,1,1,1,2,2,3,3,4]
Output: 5, nums = [0,1,2,3,4,_,_,_,_,_] */

function removeDuplicates(&$nums) {
       
    $length = count($nums);
    $unique = [];
    $underScoreCnt = 0;
    for($i=0; $i < $length; $i++){
        if(!in_array($nums[$i], $unique)){
            $unique[] = $nums[$i];
        } else {
            $underScoreCnt++;
        }
    }
    $cnt = count($unique);
    for($i=0; $i < $underScoreCnt; $i++){
        $unique[] = '_';
    }
    $nums = $unique;
    return $cnt;
}

$nums = [0,0,1,1,1,2,2,3,3,4]; //[1,1,2];
$uniqueCnt = removeDuplicates($nums);
echo $uniqueCnt;
print_r($nums);

