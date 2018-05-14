<<<<<<< HEAD
<?php
function countUniqChars($text){
    $char = str_split($text);
    $count = 0;
    $uniqChar = [];
foreach ($char as $key => $value) {
    if (in_array($value, $uniqChar)){
        continue;
    }
    $uniqChar[] = $value;
    $count++;
}
return $count;
}
$text1 = 'yy';
print_r(countUniqChars($text1)); // => 1
echo("\n");
$text2 = 'yyab';
print_r(countUniqChars($text2)); // => 3
echo("\n");
$text3 = 'You know nothing Jon Snow';
=======
<?php

function countUniqChars($text){

    $char = str_split($text);
    $count = 0;
    $uniqChar = [];

foreach ($char as $key => $value) {
    if (in_array($value, $uniqChar)){
        continue;
    }
    $uniqChar[] = $value;
    $count++;
}
return $count;
}

$text1 = 'yy';
print_r(countUniqChars($text1)); // => 1
echo("\n");
$text2 = 'yyab';
print_r(countUniqChars($text2)); // => 3
echo("\n");
$text3 = 'You know nothing Jon Snow';
>>>>>>> 21edd427d928fae6eca5a0ecae303d262cb70d43
print_r(countUniqChars($text3)); // => 13