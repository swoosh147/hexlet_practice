<<<<<<< HEAD
<?php

function getSameParity($array){

if(empty($array)) {
    return 'empty array';
}
}

print_r(getSameParity([])); // => []
=======
<?php

function getSameParity($array){

if (empty($array)){
    return 'empty array';
}
$evenNumber = [];
$ownNumber = [];

if($array[0] % 2 == 0 ){
foreach ($array as $index => $value) {
    if ($value % 2 == 0){
        $evenNumber[] = $value;
    }
}
return $evenNumber;
}
foreach ($array as $key => $value) {
    if($value % 2 != 0){
        $ownNumber[] = $value;
    }
}
return $ownNumber;
}

Print_r(getSameParity([])); // => []
echo ("\n");
Print_r(getSameParity([1, 2, 3])); // => [1, 3]
echo ("\n");
Print_r(getSameParity([1, 2, 8])); // => [1]
echo ("\n");
Print_r(getSameParity([2, 2, 8])); // => [2, 2, 8]
>>>>>>> 21edd427d928fae6eca5a0ecae303d262cb70d43
