<?php

 $derik = [
    'nome' => 'Derik',
    'idade' => 22,
    'profissao' => 'Programador'
 ];

 $alexia = [
    'nome' => 'Alexia',
    'idade' => 25,
    'profissao' => 'Eng. Civil',
 ];

 foreach($derik as $carac => $value) {

    echo "$carac => $value <br>";

 }

 foreach($alexia as $value) {

    echo "$value <br>";
    
 }
