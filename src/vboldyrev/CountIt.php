<?php

namespace vboldyrev;

function test_count($numbers, $cifra)
{
    $stringNumbers = strval($numbers);
    $arr = str_split($stringNumbers);
    $count = 0;
    foreach ($arr as $char) {
        if ($char == $cifra) {
            $count++;
        }
    }
    return $count;
}

    print_r(test_count($numbers = 442158755745, $cifra = 4));