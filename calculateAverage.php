<?php

// Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива.
//  Благодаря этой функции мы наконец-то посчитаем среднюю температуру по больнице.
// <?php
// $temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];
// calculateAverage($temperatures); // => 38.5

function calculateAverage($temperatures){
if(empty($temperatures)){
    return NULL;
}
    $count = count($temperatures);

$result = array_sum($temperatures) / $count;    
return $result;
}
$temperatures = [];
$temperatures1 = [37.5, 34, 39.3, 40, 38.7, 41.5];
print_r(calculateAverage($temperatures));
print_r("\n");
print_r(calculateAverage($temperatures1));