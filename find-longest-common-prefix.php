<?php
// find the longest common prefix string amongst an array of strings.
// If there is no common prefix, return an empty string "".

function longestCommonPrefix($strArray){
    if(empty($strArray)) return "";
    
    $minLength = PHP_INT_MAX;
    foreach($strArray as $str){
        $minLength = min($minLength, strlen($str));
    }
    $prefix = "";
    for($i = 0; $i <= $minLength; $i++){
        $currentChar = $strArray[0][$i];
        foreach($strArray as $str){
            if($str[$i] !== $currentChar){
                return $prefix;
            }
        }
        $prefix .= $currentChar; 
    }
    return $prefix;
}
// Example 1
$strs1 = ["flower","flow","flight"];
echo "Output: " . longestCommonPrefix($strs1) . "\n"; // Should output "fl"