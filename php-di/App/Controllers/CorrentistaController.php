<?php
    namespace App\Controllers;
    require_once '../../vendor/autoload.php';
    use App\Models\Correntista;
   
    class CorrentistaController
    {
        private $nome_razao;
        private $cpf_cnpj;
        private $rg_inscSocial;
        private $data;   
        private $telefone;
        private $cep;
        private $cidade;
        private $bairro;
        private $rua;
        private $numRua;
        private $complemento;
        private $email;
        private $senha;
        private $num_conta;
        private $data_cadastro;
        private $saldo;
        public $correntista;
        private $correntistaDao;

        public function __construct(Correntista $correntista/*, \App\Model\CorrentistaDao $correntistaDao*/)
        {
            $this->correntista    = $correntista;
            $this->cpf_cnpj      = isset($_POST['cpf_cnpj']) ? $_POST['cpf_cnpj'] : "teste";
            //$this->correntistaDao = $correntistaDao;
            /*$this->nome_razao    = isset($_POST['nome_razao']) ? $_POST['nome_razao'] : "teste";;
            
            $this->rg_inscSocial = isset($_POST['rg_inscSocial']) ? $_POST['rg_inscSocial'] : "teste";
            $this->data          = isset($_POST['data']) ? $_POST['data'] : "2022-02-02";
            $this->telefone      = isset($_POST['telefone']) ? $_POST['telefone'] : "teste";
            $this->cep           = isset($_POST['cep']) ? $_POST['cep'] : "teste";
            $this->cidade        = isset($_POST['cidade']) ? $_POST['cidade'] : "teste";
            $this->bairro        = isset($_POST['bairro']) ? $_POST['bairro'] : "teste";
            $this->rua           = isset($_POST['rua']) ? $_POST['rua'] : "teste";
            $this->numRua        = isset($_POST['numRua']) ? $_POST['numRua'] : 11;
            $this->complemento   = isset($_POST['complemento']) ? $_POST['complemento'] : "teste";
            $this->email         = isset($_POST['email']) ? $_POST['email'] : "sidnei@email.com";
            $this->senha         = isset($_POST['senha']) ? $_POST['senha'] : "1233";
            $this->num_conta     = rand();
            $this->data_cadastro = isset($_POST['data_cadastro']) ? $_POST['data_cadastro'] : date("d-m-Y H:i:s");
            $this->saldo         = isset($_POST['saldo']) ? $_POST['saldo'] : 2022;*/
        }

        public function validarDados()
        {  
            $this->correntista->setNomeRazao($this->nome_razao);
            $this->correntista->setCpfCnpj($this->cpf_cnpj);
            $this->correntista->setRgInscSocial($this->rg_inscSocial);
            $this->correntista->setData($this->data);
            $this->correntista->setTelefone($this->telefone);
            $this->correntista->setCep($this->cep);
            $this->correntista->setCidade($this->cidade);
            $this->correntista->setBairro($this->bairro);
            $this->correntista->setRua($this->rua);
            $this->correntista->setNumRua($this->numRua);
            $this->correntista->setComplemento($this->complemento);
            $this->correntista->setEmail($this->email);
            $this->correntista->setSenha($this->senha);
            $this->correntista->setNumConta($this->num_conta);
            $this->correntista->setDataCadastro($this->data_cadastro);
            $this->correntista->setSaldo($this->saldo);
        }

        public function teste()
        {
            return $this->correntista->getCpfCnpj();
        }
    }



    $containerBuilder = new \DI\ContainerBuilder();
    $containerBuilder->useAutowiring(true);
    $container = $containerBuilder->build();
    
    $obj = $container->get('\App\Controllers\CorrentistaController');
    $obj->validarDados();
    echo "<br>";
    var_dump( $obj->teste());

?>