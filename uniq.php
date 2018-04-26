<?php


function uniq(array $mas)
{

if (empty($mas))
{
  return [];
}
$mas2 = [];
  foreach ($mas as $value) {
if (!in_array($value, $mas2))
{
 $mas2[] = $value;
 }
 }
return $mas2;
}

print_r (uniq([1,1,2,3,3,4,5,5]));
