<?php
function lengthOfLastWord($string){
  $string=rtrim($string);
  $pises=explode(" ",$string);

  return $pises;
}

print_r(lengthOfLastWord('hello world Julia and Msx'));
