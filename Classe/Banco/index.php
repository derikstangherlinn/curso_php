<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>BANCO:</h2>
        <body>
            <pre>
            <?php
                require_once 'banco.php';
                
                    $p1 = new ContaBanco();
                    $p2 = new ContaBanco();
                    $p1-> abrirConta("CC");
                    $p1-> setDono("Ana");
                    $p2-> abrirConta("CP");
                    $p2-> setDono("Julia");                  
            ?>
            </pre>
        </body>
    </html>