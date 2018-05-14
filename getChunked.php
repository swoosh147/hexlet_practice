<?php

function getChunked($arr, $n)
    
    {
        $j=0;
        $result=[];
        foreach ($arr as $key => $item) {
            $arr2[$j]=$item;
            $j++;
            if ( ($j == $n) || ($key == sizeof($arr) - 1)) {
                $result[] = $arr2;            
                $j = 0;
                $arr2=[];
            }
        }
        return $result;
    }
    print_r(getChunked(['a', 'b', 'c', 'd'], 2));
    // → [['a', 'b'], ['c', 'd']]
    
    print_r(getChunked(['a', 'b', 'c', 'd'], 3));
    // → [['a', 'b', 'c'], ['d']]