<?php

namespace vboldyrev;

    function FIO($FullName)
    {
        // Так же можно разбирать стрингами.
        $fio = preg_replace('/(\s[А-ЯЁ])[а-яё]+/u','$1.',"$FullName");
        print_r($fio);
    }

    FIO('Сомов Игорь Андреевич');


