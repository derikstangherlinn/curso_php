<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>CANETA POO:</h2>
        <body>
            <?php
                require_once 'caneta.php';

// 2 Objetos da mesma classe, mas não possuem ligação entre eles

                    $c1 = new Caneta;
                    $c1-> cor = "Azul";
                    $c1-> ponta = 0.5;
                    $c1-> tampada = true;
                    $c1-> tampar();
                    print_r($c1);
                    $c1->rabiscar();

                    echo "<br>";
                    echo "<br>";

                    $c2  = new Caneta;
                    $c2->cor = "Verde";
                    $c2->carga = 50;
                    $c2->tampada = true;
                    $c2->destampar();
                    print_r($c2);
                    $c2->rabiscar();
                    

            ?>
        </body>
    </html>