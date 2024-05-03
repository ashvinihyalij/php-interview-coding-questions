<?php
/*
shuffle the array manually without using php sort function 
*/
function manualShuffle($array){
    $shuffledArr = [];
    $arrCount = count($array);
    $indexUsed = [];
    while(count($shuffledArr) < $arrCount){
        $randomIndex = rand(0,  $arrCount - 1);
        if(!in_array($randomIndex, $indexUsed)){
            $shuffledArr[] = $array[$randomIndex];
            $indexUsed[] = $randomIndex;
        }
    }
    return $shuffledArr;
}
$array = [1, 2, 3, 4, 5];
$shuffled = manualShuffle($array);
print_r($shuffled);
?>