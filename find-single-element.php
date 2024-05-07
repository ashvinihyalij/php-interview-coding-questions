<?php
// Given a non-empty array of integers nums,
//every element appears twice except for one. Find that single one.

function singleNumber($nums) {    
    $result = [];
    foreach($nums as $num){
        if(isset($result[$num])){
            $result[$num] = $result[$num] + 1;
        } else {
            $result[$num] = 1;
        }
    }
    foreach($result as $key=>$val){
        if($val === 1){
            return $key;
        }
    }
}
// Example 1
$nums =  [2,2,1]; //[4,1,2,1,2];[1];
$output = singleNumber($nums);
print_r($output);

