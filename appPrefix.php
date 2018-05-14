<?php
function addPrefix($names, $prefix)
{
    $result = [];
    for ($i = 0; $i < sizeof($names); $i++) {
        $result[$i] = "{$prefix} {$names[$i]}";
    }

    return $result;
}
$names = ['john', 'smith', 'karl'];
 Print_r(addPrefix($names, 'Mr'));