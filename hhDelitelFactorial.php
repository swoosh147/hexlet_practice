<?php
function delFactorial($n, $end){
  $res =0;
  for ($n=$n; $n <= $end ; $n++) {
    for ($i=0; $i < $n + 1 ; $i++) {
      if (gmp_fact($i) % $n == 0) {
        $res = $res + $i;
        break;
    }

    }
  }
  return $res;
}
echo delFactorial(6,10);

 ?>
