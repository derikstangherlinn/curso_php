<?php

require_once 'login.php';

$logar = new Login();
$logar-> setEmail("teste/()@teste.com");
$logar-> setSenha("123456");
$logar->logar(); 
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
