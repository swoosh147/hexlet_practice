<?php

// Реализуйте функцию getIndexOfWarmestDay,
// которая находит самый теплый день (тот, у которого была зарегистрирована максимальная температура в один момент времени) 
// и возвращает индекс этого дня в исходном массиве.

function getIndexOfWarmestDay($data){

if (empty($data)){
    return null;
}

$index = 0;
$max = $data [0][0];

foreach ($data as $key => $temperatures) {
    $currentValue = max($temperatures);
    if($currentValue > $max){
$max = $currentValue;
$index = $key;
    }

}
return $index;
}

$data = [
    [-5, 7, 1],
    [3, 2, 3],
    [-1, -1, 10],
];
print_r(getIndexOfWarmestDay($data)); // 2