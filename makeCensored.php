<?php

function makeCensored ($sentence, $word) {
    $censored = '$#%!';
    $words = explode(' ', $sentence);

foreach ($words as $key => $value) {
    if($value === $word){
     $words[$key] = $censored;
    }
}

    return implode(' ', $words);
}

$sentence2 = ('hello my name is max i prime and');
print_r(makeCensored($sentence2, 'max'));
echo ("\n");
$sentence1 = 'When you play the game of thrones, you win or you die';
print_r(makeCensored($sentence1, 'die'));
// => When you play the game of thrones, you win or you $#%!
echo ("\n");
$sentence3 = 'chicken chicken? chicken! chicken';
print_r(makeCensored($sentence3, 'chicken'));
// => '$#%! chicken? chicken! $#%!';