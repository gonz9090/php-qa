<?php

namespace vboldyrev;

    function FIO(string $FullName)
    {
        // Так же можно разбирать стрингами.
        $fio = preg_replace('/(\s[А-ЯЁ])[а-яё]+/u','$1.', $FullName);
        return $fio;
    }

    print_r(FIO('Сомов Игорь Андреевич'));


