<?php
// Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов для двух массивов

function getSameCount($array1, $array2){
    $count = 0;
    $uniqueArray1 = array_unique($array1);
    $uniqueArray2 = array_unique($array2);
foreach ($uniqueArray1 as $index1) {
    foreach ($uniqueArray2 as $index2) {
       if ($index1 === $index2){
           $count = $count + 1; 
       } 
    }
}
return $count;
}


print_r(getSameCount([], [])); // => 0
echo ("\n");
print_r(getSameCount([1, 10, 3], [10, 100, 35, 1])); // => 2
echo ("\n");
print_r(getSameCount([1, 3, 2, 2], [3, 1, 1, 2])); // => 3