<?php
//Given two strings needle and haystack,
//return the index of the first occurrence of needle in haystack,
//or -1 if needle is not part of haystack.

function findFirstOccurrence($haystack, $needle){
    $n = strlen($haystack);
    $m = strlen($needle);
    if($m == 0 || $m > $n){
        return -1;
    }
    for($i=0; $i <= $n - $m; $i++){
        $found = true;
        for($j=0; $j < $m; $j++){
            if($haystack[$i+$j] !== $needle[$j]){
                $found = false;
                break;
            }
        }
        if($found){
            return $i;
        }
    }
    return -1;
}
// Example 1
$haystack1 = "happyashsomu";
$needle1 = "ash";
$output1 = findFirstOccurrence($haystack1, $needle1);
echo "Output: $output1\n"; // Should output 0