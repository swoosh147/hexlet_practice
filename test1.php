<?php


function flatten($coll)
{
    $result = [];
    foreach ($coll as $item) {
        // is_array - функция (предикат) стандартной библиотеки
        if (is_array($item)) {
            foreach ($item as $subitem) {
                $result[] = $subitem;
            }
        } else {
            $result[] = $item;
        }
    }
    
    return $result;
}

print_r(flatten([3, 2, [], [3, 4, 2], 3, [123, 3]]));