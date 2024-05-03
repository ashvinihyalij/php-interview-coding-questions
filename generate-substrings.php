<?php
/*
Input: N = 12345 
Output: Possible Substrings: {1, 12, 123, 1234, 12345, 2, 23, 234, 2345, 3, 34, 345, 4, 45, 5}
Input: N = 123 
Output: Possible Substrings: {1, 12, 123, 2, 23, 3}  
*/

function generateSubStrings($string){
    $string = (string) $string;
    $result = [];
    $length = $len = strlen($string);
    for($i = 0; $i < $length; $i++){
        for($k = 1; $k <= $len; $k++){
            $result[] = substr($string, $i, $k);
        }
        $len--;
    }
    return implode(',', $result);
}

$string = 123;
echo generateSubStrings($string);

?>