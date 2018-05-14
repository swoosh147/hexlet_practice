<?php
function checkIfBalanced($expression)
{
    $stack = [];
    $startSymbols = ['{', '(', '<', '['];
    $finishSymbols = ['}', ')', '>', ']'];  
    $pairs = ['{}', '()', '<>', '[]'];
    
    for ($i = 0; $i < strlen($expression); $i++) {
        $curr = $expression[$i]; 
        if (in_array($curr, $startSymbols)) {
            array_push($stack, $expression[$i]);
        } else {
            $prev = array_pop($stack); 
            $pair = "{$prev}{$curr}";
            if (!in_array($pair, $pairs)) {
                return false;
            }
        };
    }
    
    return sizeof($stack) == 0;
}

var_dump(checkIfBalanced('['));
var_dump(checkIfBalanced('>'));
var_dump(checkIfBalanced('}{'));
var_dump(checkIfBalanced('[]{<>}'));
var_dump(checkIfBalanced('[]{(<>}'));