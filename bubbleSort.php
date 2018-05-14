<?php

function bubbleSort($arr)
{
   sort($arr);
   foreach ($arr as $key => $value) {
       echo "arr[" . $key . "] = " . $value . "\n";
   }
 
}

print_r(bubbleSort([])); // => []
print_r(bubbleSort([3, 10, 4, 3])); // => [3, 3, 4, 10]