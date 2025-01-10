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
    if ($pessoa ['idade'] >= $maioridade) {   //Pega a informação dentro da variavel $pessoa, pega a array idade que = (ex: 17)
        echo "Ele é maior de idade";            // e pergunta se é maior ou igual a 18 ($maioridade)
    } else {
        echo "Ele não é maior de idade";
    }
    
?>