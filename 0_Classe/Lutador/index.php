<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>LUTADOR:</h2>
        <body>
            <pre>
                <?php
                        require 'lutador.php';
                        $l = new Lutador ("Derik", "França", 31, 1.75, 68.9, "Leve", 11, 2, 1);
                        $l -> status();
                        print_r($l);




                        
                       
                    ?>
                    </pre>
                </body>
            </html>