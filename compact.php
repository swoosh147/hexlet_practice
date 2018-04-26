<?php

function compact1(array $array)
{
	if(empty($array)) return;

	$newArr = [];
	foreach ($array as $key => $value) {

		if( $value !== null ) {

			$newArr[$key] = $value;
		}
	}

	return $newArr;
}
print_r(compact1(2, null, '', 1, null, [], 0));
