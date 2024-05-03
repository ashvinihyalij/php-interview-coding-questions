<?php
/*
Write a Code for the below requirement Sample Inputs & Outputs
Input :
List1 = [1,2,3,4,5,6,7,8,9,10] and Split_Value = 3
Expected Output is (Split Like this)
[[1,2,3],[4,5,6],[7,8,9],[10]]

Input :
List1 = [1,2,3,4,5,6,7,8,9,10] and Split_Value = 5
Expected Output is (Split Like this)
[[1,2,3,4,5],[6,7,8,9,10]]
*/

function chunkArray($list, $splitVal){
    $chunk = $chunks = [];
    foreach($list as $item){
        $chunk[] = $item;
        if(count($chunk) === $splitVal){
            $chunks[] = $chunk;
            $chunk = [];
        }
    }
    if(count($chunk) > 0){
        $chunks[] = $chunk;
    }
    return $chunks;
 }
 $list = [1,2,3,4,5,6,7,8,9,10];
 $splitVal = 3;
 $chunks = chunkArray($list, $splitVal);
   
 print_r($chunks);
 

