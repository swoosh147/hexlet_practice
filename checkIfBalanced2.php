<?php

function checkIfBalanced($expression)
{
    $stack = [];
    $startSymbol = '(';
    $endSymbol = ')';    
    for ($i = 0; $i <= strlen($expression) - 1; $i++){
        $curr = $expression[$i];
        if ($curr == $startSymbol) {
            array_push($stack, $curr);
        } elseif ($curr == $endSymbol) {
                if (empty($stack)) {
                    return false;
                }
                array_pop($stack);
            }
    }
    return (count($stack) == 0);
}
    
    var_dump(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'));
    var_dump(checkIfBalanced('(4 + 3))'));
    var_dump(checkIfBalanced(')'));
    var_dump(checkIfBalanced('('));
    var_dump(checkIfBalanced(')()('));
