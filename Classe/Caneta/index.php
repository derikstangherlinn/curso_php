<!DOCTYPE html>
<html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
        </head>
        <body>
            <?php
                require_once 'caneta.php';

                    $c1 = new Caneta;
                    $c1-> cor = "Azul";
                    $c1-> ponta = 0.5;
                    $c1-> tampada = false;
                    $c1-> tampar();
                    $c1-> rabiscar();
                    //print_r ($c1); 
                    

            ?>
        </body>
    </html>