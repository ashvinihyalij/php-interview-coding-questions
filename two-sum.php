<?php

/*
Given an array of integers nums and an integer target,
return indices of the two numbers such that they add up to target.
Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Input: nums = [3,2,4], target = 6
Output: [1,2]
Input: nums = [3,3], target = 6
Output: [0,1]
*/

function twoSum($nums, $target) {
    $indices = [];
    for($i=0; $i < count($nums); $i++){
       if($nums[$i] + $nums[$i+1] === $target){
           $indices[] = $i;
           $indices[] = $i+1;
           return $indices;  
       }
    }
    return $indices;
   
}

$nums = [3,3];
$target = 6;
$ouput = twoSum($nums, $target);
print_r($ouput);
?>