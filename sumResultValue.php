<?php

function sumResultValue(){
$r = 0;
$q = 0;
$t = 0;
$w = 0;
$u = 0;

$control = 0;

for ($r=1; $r < 9 ; $r++) {
  for ($q=0; $q < 9 ; $q++) {
    for ($t=0; $t < 9 ; $t++) {
      for ($u=0; $u < 9 ; $u++) {
        for ($w=1; $w <9 ; $w++) {
          if (($r * 1000 + $q * 100 + $t * 10 + $r) + ($w *100 + $r * 10 + $t) == ($r * 1000 + $w * 100 + $u * 10 + $u) ) {
            $control = $control + 1;
          }
        }
      }
    }
  }
}
return $control;

}
echo sumResultValue();
 ?>
