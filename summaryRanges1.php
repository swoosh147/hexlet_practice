<?php
function summaryRanges($numbers) {
    $result = [];

    $rangeStart = "";
    $rangeEnd = "";

    foreach($numbers as $key => $value) {
        if (((!isset($numbers[$key - 1])) || ($numbers[$key - 1] + 1 != $value))
            && ((isset($numbers[$key + 1])) && ($numbers[$key + 1] - 1 == $value))) {
            $rangeStart = $value;
        } elseif (((!isset($numbers[$key + 1])) || ($numbers[$key + 1] - 1 != $value))
            && ((isset($numbers[$key - 1])) && ($numbers[$key - 1] + 1 == $value))) {
            $rangeEnd = $value;

            $result[] = $rangeStart . "->" . $rangeEnd;

            $rangeStart = "";
            $rangeEnd = "";
        }
    }

    return $result;
}

print_r(summaryRanges(4567810));

 ?>
