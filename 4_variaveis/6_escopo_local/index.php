<?php

    $x = 10;

    echo "$x global <br>";

    function teste() {

        $x = 5;

        echo "$x local <br>";

    }

    teste();

    echo "$x global <br>";
    
    teste();

    function testando(){

        $x = 12;

        echo "$x local 2 <br>";

    }

    $x = 99;

    testando(); // function 12; no localhost

    teste();    // 5; no localhost

    echo "$x global <br>"; // 99; no localhost

?>

