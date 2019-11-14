<?php

namespace vboldyrev;

function test_count($numbers, $cifra)
{
    $arr = str_split($numbers);
    $count = 0;
    foreach ($arr as $char) {
        if ($char == $cifra) {
            $count++;
        }
    }
    return $count;
}

    print_r(test_count( 442158755745, $cifra = 4));