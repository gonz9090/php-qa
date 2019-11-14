<?php

namespace vboldyrev;

function getSecond($arr)
{
    $excludingMaxNumber = max($arr);
    while (($i = array_search($excludingMaxNumber, $arr)) !== false) {
        unset($arr[$i]);
    }
    $maxNumber = max($arr);
    return $maxNumber;
}

echo(getSecond($arr = [3, 4, 2, 4, 5, 5]));