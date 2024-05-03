<?php

//Input: s = “i love programming very much” 
//Output: s = “much very programming love i” 

function reverseString($string){
    $revArr = [];
    $strArr = explode(' ', $string);
    $strCount = count($strArr);
    for($i = $strCount - 1; $i >= 0; $i--){
        $revArr[] = $strArr[$i];
    }
    return implode(' ', $revArr);
 }
 
 $string = "i love programming very much";
 echo reverseString($string);

 ?>