<?php
function isContinuousSequence($array){
	{
		if (sizeof($array) < 2) {
			return false;
		}
foreach ($array as $key => $value) {
	if (array_key_exists($key-1, $array) && ($array[$key] !== $array[$key-1] + 1 )){
		return false;
	}
}
return true;
}
}
print_r(isContinuousSequence([]));
print_r(isContinuousSequence([5, 3, 2, 8]));
print_r(isContinuousSequence([0, 1, 2, 3]));
print_r(isContinuousSequence([-5, -4, -3]));
print_r(isContinuousSequence([10, 11, 12, 13]));
print_r(isContinuousSequence([10, 11, 12, 14, 15]));


