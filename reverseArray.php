<?php
function reverseArray($coll) 
{
    $size = sizeof($coll);
    $maxIndex = floor($size / 2);
    for ($i = 0; $i < $maxIndex; $i++) {
        $mirrorIndex = $size - $i - 1;
        $temp = $coll[$i];
        $coll[$i] = $coll[$mirrorIndex];
        $coll[$mirrorIndex] = $temp;
    }
    
    return $coll;
}

print_r(reverseArray([3, 2]));
print_r(reverseArray([3, 56, 2]));
print_r(reverseArray(['one', 'two', 'three', 'four']));