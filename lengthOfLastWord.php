<?php

function lengthOfLastWord($string){
$string = rtrim($string);
$pises = explode(' ',$string);

return strlen(end($pises));
}

print_r(lengthOfLastWord('hello, world!  '));
