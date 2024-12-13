<?php

    $pessoa = [
    'nome' => 'derik',
    'idade' => 20,
    'peso' => 65,
    'cor' => 'branco'
    ];

    print_r($pessoa);

    $nome = $pessoa ['nome'];
    $idade = $pessoa ['idade'];
    $peso = $pessoa ['peso'];
    $cor = $pessoa ['cor'];

    $maioridade = 18;

    echo "Meu nome é $nome, tenho $idade anos, peso $peso Kg e sou $cor";
    echo "<br>";
    if ($pessoa ['idade'] >= $maioridade) {
        echo "Ele é maior de idade";
    }

