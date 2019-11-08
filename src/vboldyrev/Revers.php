<?php

namespace vboldyrev;

function revers(string $str): string
{
    return strrev($str);
}

print_r(revers("world"));