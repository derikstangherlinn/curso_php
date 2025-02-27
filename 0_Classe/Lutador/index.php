<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>LUTADOR:</h2>
        <body>
            <pre>
                <?php
                        require 'lutador.php';
                        require 'luta.php';
                        $l = array();
                        $l[0] = new Lutador ("Derik ", "França", 30, 1.75, 68.9, 11, 2, 1);
                        $l[1] = new Lutador ("Putscript ", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
                        $l[2] = new Lutador ("Snapshadow ", "Eua", 36, 1.65, 80.9, 12, 2, 1);
                        $l[3] = new Lutador ("Dead Code ", "Australia", 28, 1.93, 81.6, 13, 0, 2);
                        $l[4] = new Lutador ("UFOCobol ", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
                        $l[5] = new Lutador ("Nerdaart ", "Eua", 30, 1.81, 105.7, 12, 2, 4);
                        $UEC01 = new Luta();
                        $UEC01->marcarLuta($l[4], $l[5]);
                        $UEC01->lutar();
                        $l[0] ->Status();
                        $l[1] ->Status();
                        ?>
                    </pre>
                </body>
            </html>