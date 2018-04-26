<?php
function rFunc($x) {
   if ($x == 0) { return 1; }
   return $x + rFunc($x - 1);

}
echo rFunc(5);
echo "\n";

function factorial($x) {
   if ($x == 0) { return 1; }
   return $x * factorial($x - 1);

}
echo factorial (3);
echo "\n";

function fib($x) {
   if ($x <=2) { return 1; }
   return fib($x - 2) + fib($x - 1);

}
echo fib(8);
echo "\n";
