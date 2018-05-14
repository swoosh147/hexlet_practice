<?php
function swap($coll, $center)
{
    $firstIndex = $center - 1;
    $lastIndex = $center + 1;

    if (array_key_exists($firstIndex, $coll) && array_key_exists($lastIndex, $coll)) {
        $temp = $coll[$firstIndex];
        $coll[$firstIndex] = $coll[$lastIndex];
        $coll[$lastIndex] = $temp;
    }

    return $coll;
}

$names = ['john', 'smith', 'karl'];
print_r(swap($names, 1)); // => ['karl', 'smith', 'john'];

print_r(swap($names, 2));  // => ['john', 'smith', 'karl']

print_r(swap($names, 0));  // => ['john', 'smith', 'karl']