<?php

namespace vboldyrev;

    $string = "Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href='https://example.com'>ссылки</a>";

    function getLinks($text)
    {
        preg_match_all('#(?:https?|ftp)://[^\s\,]+#i', $text, $array);
        return $array;
    }

    print_r(getLinks($string));

    function getPhone($text)
    {
        $pattern = '([78\+\(](?:[-()]*[0-9 ]){5,15})';
        preg_match($pattern, $text, $number);
        return $number;
    }

    print_r(getPhone($string));