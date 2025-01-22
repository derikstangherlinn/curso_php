<?php

class Calculadora
{
    public function adicao($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function subtracao($n1, $n2)
    {
        return $n1 - $n2;
    }

    public function multiplicacao($n1, $n2)
    {
        return $n1 * $n2;
    }

    public function divisao($n1, $n2)
    {
        if ($n2 == 0) {
           return "Divisão por zero não é permitida.";
        }
        return $n1 / $n2;
    }
}