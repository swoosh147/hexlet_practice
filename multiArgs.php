<?php

function multiArgs(...$vars)
{
    if ($vars == null) {
        return null;
    }
    $result = 1;
    foreach ($vars as $var) {
        $result *= $var;
    }
    return $result;
}

echo multiArgs();
