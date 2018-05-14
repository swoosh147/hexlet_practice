<?php

function getIntersectionOfSortedArray($array1, $array2){
    $result = [];
    if(empty($array1) || empty($array2)){
        return $result;
    }

	$size1 = sizeof($array1);	$size2 = sizeof($array2);
	$i = 0; $j = 0;
	do {
		if ($j < $size2 && $array1[$i] < $array2[$j]) {
			$i++;
		}
		if ($i < $size1 && $array2[$j] < $array1[$i]) {
			$j++;
		}
		if ($i < $size1 && $j < $size2 && $array1[$i] === $array2[$j]) {
			$result[] = $array1[$i]; 
			$i++; $j++;
		}
	} while ($i < $size1 && $j < $size2);
    return $result;
}

$actual1 = getIntersectionOfSortedArray([], []);
print_r($actual1);
$actual2 = getIntersectionOfSortedArray([1], []);
print_r($actual2);
$actual3 = getIntersectionOfSortedArray([], [2]);
print_r($actual3);
$actual4 = getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4]);
print_r($actual4);
$actual5 = getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]);
print_r($actual5);


