<?php

function wordsCount($string)
{
    $result = [];
    $words = explode(' ', trim($string));

    foreach ($words as $word) {
        $tWord = trim($word);
        if (!empty($tWord)) {
            if (isset($result[$tWord])) {
                $result[$tWord]++;
            } else {
                $result[$tWord] = 1;
            }
        }
    }

    return $result;
}


print_r(wordsCount("a c  d a d"));
