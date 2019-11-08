<?php

namespace vboldyrev;

function Fizzbuzz($number){
    if ($number % 3 == 0 && $number % 5 == 0 ) {
        var_dump ('fizzbuzz');
    }
    elseif ($number % 5 == 0 ) {
        var_dump ('buzz');
    }
    elseif ($number % 3 == 0 ) {
        var_dump ('fizz');
    }
    else {
        var_dump ($number);
    }
}

    Fizzbuzz(1);
    Fizzbuzz(2);
    Fizzbuzz(3);
    Fizzbuzz(5);
    Fizzbuzz(9);
    Fizzbuzz(15);
