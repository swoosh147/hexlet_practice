<?php

function pick($arr, $keys){
    $result = [];
    foreach ($arr as $key => $value) {
        if(in_array($key, $keys)){
            $result[$key] = $value;
        }
    }
    return $result;
}

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'
];
print_r(pick($data, ['user'])); // → ['user' => 'ubuntu']
echo ("\n");
print_r(pick($data, ['user', 'os'])); // → ['user' => 'ubuntu', 'os' => 'linux']
echo ("\n");
print_r(pick($data, [])); // → []
echo ("\n");
print_r(pick($data, ['none'])); // → []