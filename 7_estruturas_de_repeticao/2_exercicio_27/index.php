<?php

    $arr = [5, "Derik", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 5, 10, "Alo"];

    $x = count($arr);
    $y = 0;

    while ($y < $x) {

        if(is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y++;
    }