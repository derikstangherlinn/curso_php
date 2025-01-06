<?php

 $a = 3;
 $b = 4;


 // imprimiu a string no localhost pois 3 É DIFERENTE de 4.
 if($a != $b){
    echo "Testando diferença 1 <br>";
 }
 

 if($a != 3){
    echo "Testando diferença 2 <br>";
 }

 
// Imprimiu a string pois o null = false É DIFERENTE da string "Teste".
 if(false != "Teste") {
    echo "Testando diferença 3 <br>";
 }


 if(3 != "3") {
    echo "Testando diferença 4 <br>";
 }


 if(3 != "4") {
    echo "Testando diferença 5 <br>";
 }