<?php

function F($n1)
{
if ($n1 > 0)   
  {     
    F($n1 - 4);     
    echo ("$n1");     
    F($n1 / 3);   
  } 
}
print_r(F(9));