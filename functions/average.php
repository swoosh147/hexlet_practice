<?php

// Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных 
//аргументов. Функция принимает на вход от одного числа и больше.

// average(0); // => 0
// average(0, 10); // => 5
// average(-3, 4, 2, 10); // => 3.25

function average(...$numbers){

$count = count($numbers);
$arraySum = array_sum($numbers);
$result = $arraySum/$count;
return $result;

}


function average2($first, ...$rest)
{
    return ($first + array_sum($rest)) / (1 + sizeof($rest));
}

print_r(average(0)); // => 0
echo ("\n");
print_r(average(0, 10)); // => 5
echo ("\n");
print_r(average(-3, 4, 2, 10)); // => 3.25
echo ("\n");
print_r(average2(0)); // => 0
echo ("\n");
print_r(average2(0, 10)); // => 5
echo ("\n");
print_r(average2(-3, 4, 2, 10)); // => 3.25