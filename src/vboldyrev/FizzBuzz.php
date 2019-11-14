<?php

namespace vboldyrev;

function Fizzbuzz($number){
    $result = $number;
    if ($number % 3 == 0 && $number % 5 == 0 ) {
        $result = 'fizzbuzz';
    }
    elseif ($number % 5 == 0 ) {
        $result = 'buzz';
    }
    elseif ($number % 3 == 0 ) {
        $result = 'fizz';
    }
    return $result;
}

    var_dump(Fizzbuzz(1));
    var_dump(Fizzbuzz(2));
    var_dump(Fizzbuzz(3));
    var_dump(Fizzbuzz(5));
    var_dump(Fizzbuzz(9));
    var_dump(Fizzbuzz(15));
