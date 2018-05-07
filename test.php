<?php
function isContinuousSequence($array){
		if (empty($array)) {
			return false;
		}
foreach ($array as $key => $value) {
	echo "{$key} => {$value} \n";
}
    }

print_r(isContinuousSequence([10, 11, 12, 14, 15]));
