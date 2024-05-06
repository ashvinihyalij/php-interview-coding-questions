<?php
// Find the string length without strlen function
function stringLength($string){
    $length = 0;
    while(isset($string[$length])){
        $length++;
    }
    return $length;
}
// Example 1
$string = "Hello, world!";
echo "The length of the string is: " . stringLength($string) . "\n"; 
