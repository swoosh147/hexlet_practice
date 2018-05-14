<?php
function get(array $arr, $index, $default = NULL)
{
    if (!array_key_exists($index, $arr)) {
        return $default;
    }

    return $arr[$index];
}

$cities = ['moscow', 'london', 'berlin', 'porto'];

print_r(get($cities, 1)); // => london
echo("\n");
print_r(get($cities, 4)); // => null
echo("\n");
print_r(get($cities, 10, 'paris')); // => paris