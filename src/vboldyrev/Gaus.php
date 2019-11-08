<?php

namespace vboldyrev;

    function gaus($number)
    {
        $sum = 0;
        for($i = 1; $i <= $number; $i++){
            $sum = $sum + $i;
        }
        var_dump($sum);
    }

    print_r(gaus(100));
    print_r(gaus(3));

