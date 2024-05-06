<?php
/*
Input: digits = [1,2,3]
Output: [1,2,4]
Explanation: The array represents the integer 123.
Incrementing by one gives 123 + 1 = 124.
Thus, the result should be [1,2,4].
Input: digits = [9]
Output: [1,0]
*/
function plusOne($digitsArr){
    $digits = implode('', $digitsArr);
    $plusOne = (string) ($digits + 1);
    $len = strlen($plusOne);
    $output = [];
    for($i = 0; $i < $len; $i++){
        $output[] = $plusOne[$i];
    }
    return $output;
}
// Example 1
$digits = [4, 3, 2, 1]; // [4, 3, 2, 2]
$output = plusOne($digits);
print_r($output);