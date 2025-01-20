<?php

class Calculadora
{
    public function adicao($a, $b)
    {
        return $a + $b;
    }

    public function subtracao($a, $b)
    {
        return $a - $b;
    }

    public function multiplicacao($a, $b)
    {
        return $a * $b;
    }

    public function divisao($a, $b)
    {
        if ($b == 0) {
            throw new InvalidArgumentException("Divisão por zero não é permitida.");
        }
        return $a / $b;
    }
}