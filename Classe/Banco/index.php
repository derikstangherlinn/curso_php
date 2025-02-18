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
                    $p1->setnumConta(1111);
                    $p2->setnumConta(2222);
                    $p1->depositar(300);
                    $p2->depositar(500);
                    $p2->sacar(1000);
                    $p1->pagarMensal();
                    $p2->pagarMensal();
                    $p1->fecharConta();
                    $p2->fecharConta();
                    $p1->fecharConta();
                    $p2->fecharConta();

                    print_r($p1);
                    print_r($p2);
            ?>
            </pre>
        </body>
    </html>