<?php

$stack = [];
array_push($stack, 3);
print_r($stack);
array_push($stack, 'Winterfall');
print_r($stack);
array_push($stack, true);
print_r($stack);

$element1 = array_pop($stack);
print_r("\n{$element1}\n");
print_r($stack);

$element2 = array_pop($stack);
print_r("\n{$element2}\n");
print_r($stack);