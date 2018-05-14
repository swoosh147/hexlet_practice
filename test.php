<?php
function isContinuousSequence($array){
		if (empty($array)) {
			return false;
		}
foreach ($array as $key => $value) {
	echo "{$key} => {$value} \n";
}
    }

<<<<<<< HEAD
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
=======
print_r(isContinuousSequence([10, 11, 12, 14, 15]));
>>>>>>> 21edd427d928fae6eca5a0ecae303d262cb70d43
