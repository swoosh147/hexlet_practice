<?php

function findIndex($array, $element){

foreach ($array as $index => $value) {
    if($element == $value){
   return $index;
    }
}
    return -1;
}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];
print_r(findIndex($temperatures, 3)); // => -1
echo ("\n");
print_r(findIndex($temperatures, 34)); // => 1
echo ("\n");
print_r(findIndex($temperatures, 40)); // => 3