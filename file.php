<?php
function addDigits($value)
{
  $str = str_split($value);
  $result = 0;
  $result = array_sum($str);
  if ($result > 9) {
    $str = str_split($result);
    $result = array_sum($str);
  }
  if ($result > 9) {
    $str = str_split($result);
    $result = array_sum($str);
  }
  return $result;
}

print_r(addDigits(49871));
