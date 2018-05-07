<?php
function swap($array, $index) {
	if (sizeof($array) < 3 || $index === 0 || $index === sizeof($array) - 1)
		return $array;
	$temp = $array[$index + 1];
	$array[$index + 1] = $array[$index - 1];
	$array[$index - 1] = $temp;
	return $array;
}
// ---------------------------------------------------------------------
$names = ['john', 'smith', 'karl'];
// => ['karl', 'smith', 'john'];
print_r(swap($names, 1));
// => ['john', 'smith', 'karl']
print_r(swap($names, 2));
// => ['john', 'smith', 'karl']
print_r(swap($names, 0));