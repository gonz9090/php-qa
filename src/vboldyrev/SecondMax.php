<?php

namespace vboldyrev;

function getSecond($arr)
{
    $excludingMaxNumber = max($arr);
    while (($i = array_search($excludingMaxNumber, $arr)) !== false) {
        unset($arr[$i]);
    }
    $maxNumber = max($arr);
    print_r($maxNumber);
    return $maxNumber;
}

getSecond($arr = [3, 4, 2, 4, 5, 5]);
