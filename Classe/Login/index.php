<?php

class Login {
    private $email;
    private $senha;

    public function getEmail() { //PEGOU o 
        return $this->email;
    }
    public function setEmail($e){
        $this->email = $e;
    }
    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($s){
        $this->senha = $s;
    }

    public function logar() {
        if ($this->email == "teste@teste.com" && $this->senha == "123456" ):
            echo "Logado com sucesso!!!!";
        else:
            echo "Dados invalidos";
        endif;     
    } 
}

$logar = new Login();
$logar-> setEmail("teste@teste.com");
$logar-> setSenha("123456");
$logar->logar(); 
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();