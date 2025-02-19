<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>CANETA POO:</h2>
        <body>
            <pre>
                <?php
                        require_once 'caneta2.php';

                        $c1 = new Caneta("BIC", "Azul", 0.5);
                        $c2 = new Caneta("FABER", "Verde", 1.0);
                        print_r($c1);
                        print_r($c2);
                    ?>
                    </pre>
                </body>
            </html>