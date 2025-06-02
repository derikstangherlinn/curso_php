<?php

    $str = "Esta é a minha string";

    $minha = substr($str, 10, 5); // String Pai, Indice Inicial, Comprimento da palavra

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string abc";

    $novaString = substr($str2, 8); // Omitir Comprimento = Pegar ate o Fim

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3); // Comprimento Negativo = Remover do ultimo indice

    echo $novaString2 . "<br>";