<?php
function myPow($base, $exp){
  $powIter = function($base, $exp,$acc) use (&$powIter){
    if ($exp == 0) { return $acc;}
return $powIter($base, $exp - 1, $acc*$base);
  };
  return $powIter($base, $exp, 1);
}
echo myPow(4,4);
echo "\n";


function delMax($num){
$divIter = function($num, $del) use (&$divIter){
        if($del == $num){return $del;}
        if($num == 1){return $num;}
        if($num % $del == 0){return $del;}
        return $divIter($num, $del + 1);

    };

    return $divIter($num, 2);
}
echo delMax(8);
echo "\n";

function factorial($num){
  $factIter = function($num,$acc) use (&$factIter){
if ($num == 0) {return 1;}
if ($num == 1){return $acc;}
return $factIter($num -1, $num * $acc );
};
  return $factIter($num, 1);
}
echo factorial(10);
