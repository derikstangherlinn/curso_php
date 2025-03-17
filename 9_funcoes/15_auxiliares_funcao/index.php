<?php       


    function soma ($a, $b, $c) {

        print_r(func_get_args()); //retorna uma lista com os argumentos de uma função

        echo "<br>";

        echo func_num_args() . "<br>"; //retorna o número de argumentos de uma função

        return $a + $b;

    }

    soma(2, 4, 5);