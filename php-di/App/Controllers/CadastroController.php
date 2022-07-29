<?php

namespace App\Controllers;

use App\Models\Cadastro;

require_once "../../vendor/autoload.php";

class CadastroController{

    private $cpf;
    
    public function __construct(Cadastro $cadastro){
        $this->cpf = $_POST['cpf'];
        $this->cadastro = $cadastro;
    }

    public function validar(){
        $this->cadastro->setCpf($this->cpf);
    }
    
    public function pegarCpf(){
        return $this->cadastro->getCpf();
    }

}


$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(true);
$container = $containerBuilder->build();
$cadastroController = $container->get('\App\Controllers\CadastroController');

$cadastroController->validar();
//pegando o dado 
var_dump($cadastroController->pegarCpf());
//pegando o dado direto do model Cadastro
var_dump($cadastroController->cadastro->getCpf());