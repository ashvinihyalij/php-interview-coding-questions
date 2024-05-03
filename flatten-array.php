<?php
/*
    Flatten array
    Input: [1, 2, [3, 4, [5, 6]], 7]
    Output: [1, 2, 3, 4, 5, 6, 7]
*/

function flattenArray(array $items) {
    $result = [];
    // Helper function to handle recursion
    function flatten($items, &$result){
        foreach($items as $item){
            if(is_array($item)){
                flatten($item, $result);
            } else {
                $result[] = $item;
            }
        }
        
    }
    // Initialize the flattening process
    flatten($items, $result);
    return $result;
}

$items = [1, 2, [3, 4, [5, 6]], 7];
$output = flattenArray($items);
print_r($output);