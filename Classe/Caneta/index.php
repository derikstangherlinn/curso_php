<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>Caneta POO:</h2>
        </head>
        <body>
            <?php
                require_once 'caneta.php';

// 2 Objetos da mesma classe, mas não possuem ligação entre eles

                    $c1 = new Caneta;
                    $c1-> cor = "Azul";
                    $c1-> ponta = 0.5;
                    $c1-> tampada = false;
                    $c1-> tampar();
                    print_r($c1);

                    echo "<br>";

                    $c2  = new Caneta;
                    $c2->cor = "Verde";
                    $c2->carga = 50;
                    $c2->tampar();
                    print_r($c2); 
                    

            ?>
        </body>
    </html>