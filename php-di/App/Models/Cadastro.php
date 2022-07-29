<?php

namespace App\Models;

class Cadastro
{
    
    private $cpf;

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }
}