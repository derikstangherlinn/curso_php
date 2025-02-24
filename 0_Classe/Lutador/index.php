<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>LUTADOR:</h2>
        <body>
            <pre>
                <?php
                        require 'lutador.php';
                        $l = new Lutador("Derik", "Brasil", 21, 1,68, 70 . "kg", 20, 2, 5 );
                        print_r($l);
                    ?>
                    </pre>
                </body>
            </html>