<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>CANETA POO:</h2>
        <body>
            <pre>
            <?php
                require_once 'caneta.php';
                
                    $c1 = new Caneta();
                    $c1->modelo = "Bic Cristal";
                    $c1->cor = "Azul";
                    $c1->SetPonta(0.5);
                    $c1->SetCarga(99);
                    $c1->SetTampada(true);
                    $c1->rabiscar();
                    $c1->tampar();
                    $c1->destampar();   
                    print_r($c1);
                    
            ?>
            </pre>
        </body>
    </html>