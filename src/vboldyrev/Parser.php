<?php

namespace vboldyrev;

    $string = "Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href='https://example.com'>ссылки</a>";

    function getLinks($text)
    {
        preg_match_all('#(?:https?|ftp)://[^\s\,]+#i', $text, $array);
        print_r($array);
    }

    getLinks($string);

    function getPhone($text)
    {
        $pattern = '([78\+\(](?:[-()]*[0-9 ]){5,15})';
        preg_match($pattern, $text, $number);
        print_r($number);
    }

    getPhone($string);