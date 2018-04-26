<?php
 function hammingWeight($num){
  return array_sum(str_split(decbin($num)));
 }

 echo hammingWeight(1232);
