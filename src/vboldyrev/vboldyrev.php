<?php

namespace vboldyrev;


//Reversed Strings
$reverse=("world");
$response=strrev($reverse);
var_dump($response);

//Gauß needs help!
function Gau($number){
    $sum = 0;
    for($i = 1; $i <= $number; $i++){
        $sum = $sum + $i;
    }
    var_dump($sum);
}
Gau(100);
Gau(3);


//Count it!
function test_count($numbers, $cifra) {
    $stringNumbers = strval($numbers);
    $arr = str_split($stringNumbers);
    $count = 0;
    foreach ($arr as $char) {
        if ($char == $cifra) {
            $count++;
        }
    }
    var_dump($count);
    return $count;
}

test_count($numbers = 442158755745, $cifra = 4);



//Brevity is the soul of wit
function FIO($FullName) {
    // Так же можно разбирать стрингами.
    $fio = preg_replace('/(\s[А-ЯЁ])[а-яё]+/u','$1.',"$FullName");
    var_dump($fio);
}

FIO('Сомов Игорь Андреевич');

// FizzBuzz
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

//Avito parser
$string = "Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href='https://example.com'>ссылки</a>";
function getLinks($text){
    preg_match_all('#(?:https?|ftp)://[^\s\,]+#i', $text, $array);
    print_r($array);
}
getLinks($string);


function getPhone($text) {
    $pattern = '([78\+\(](?:[-()]*[0-9 ]){5,15})';
    preg_match($pattern, $text, $number);
    print_r($number);
}
getPhone($string);


// Get second max
function getSecond($arr) {
    $excludingMaxNumber = max($arr);
    while (($i = array_search($excludingMaxNumber, $arr)) !== false) {
        unset($arr[$i]);
    }
    $maxNumber = max($arr);
    print_r($maxNumber);
    return $maxNumber;
}

getSecond($arr = [3, 4, 2, 4, 5, 5]);
