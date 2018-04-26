<?php

function fib($num)
{
if ($num<2) {return $num;}

return fib($num-1) + fib($num-2);

}

echo fib(8);
echo "\n";

function factorial($num)
{
if ($num == 0) {return 1;}
return $num * factorial($num-1);

}
echo factorial(3);
