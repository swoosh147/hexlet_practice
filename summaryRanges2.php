<?php

function summaryRanges($arr) {
  $res=[];
  for ($i=0;$i<sizeof($arr);$i++) {
      if(($arr[$i-1]+1 != $arr[$i]) && ($arr[$i] == $arr[$i+1]-1)) {
        $first=$arr[$i];
      }
      elseif (($arr[$i-1]+1 == $arr[$i]) && ($arr[$i] != $arr[$i+1]-1)) {
        $last=$arr[$i];
        $res[]="$first->$last";
      }
  }
  return $res;
}
print_r(summaryRanges([1, 2, 3, 4, 5, 8, 9, 10]));

 ?>
