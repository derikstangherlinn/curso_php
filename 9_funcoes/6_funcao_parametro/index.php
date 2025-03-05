<?php

    function velocidadeMaxima($vel) {

        if(is_int($vel)) {
            echo "O carro atinge a velocidade maxima de $vel km/h <br>";
        } else {
            echo "Por favor, passe um numero inteiro <br>";
        }
    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);

    //Não pode
    //velocidadeMaxima();

    echo "Teste continuando <br>";

    $velocidade = 125;

    velocidadeMaxima($velocidade);

    //PHP ignora parametro desnecessario
    velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste");

    //Mais parãmetros

    function descreverAnimal($nome, $raça) {
        echo "O $nome é da $raça";
    }

    descreverAnimal("Bob", "Vira lata <br>");
    descreverAnimal("Shark", "Pastor Alemao<br>");
    descreverAnimal("Poodle", "Tita");
