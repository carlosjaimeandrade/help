<?php
    namespace App\Models;
 

    class Correntista
    {
        private $nome_razao;
        /*private $cpf_cnpj;
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
        private $saldo;*/


        public function setNomeRazao($valor)
        {
            $valor = base64_encode($valor);
            $this->nome_razao = $valor;
        }

        public function getNomeRazao()
        {
            //echo "io";
            return $this->nome_razao;
        }      

        public function setCpfCnpj($cpf_cpnj)
        {
            //echo $valor." cpf";
            $this->cpf_cnpj = $cpf_cpnj;
        }

        public function getCpfCnpj()
        {
            return $this->cpf_cnpj;
        }

        public function setRgInscSocial($valor)
        {
            $this->rg_inscSocial = $valor;
        }

        public function getRgInscSocial()
        {
            return $this->rg_inscSocial;
        }

        public function setData($valor)
        {
            $this->data = $valor;
        }

        public function getData()
        {
            return $this->data;
        }

        public function setTelefone($valor)
        {
            $this->telefone = $valor;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setCep($valor)
        {
            $this->cep = $valor;
        }

        public function getCep()
        {
            return $this->cep;
        }

        public function setCidade($valor)
        {
            $this->cidade = $valor;
        }

        public function getCidade()
        {
            return $this->cidade;
        }

        public function setBairro($valor)
        {
            $this->bairro = $valor;
        }

        public function getBairro()
        {
            return $this->bairro;
        }

        public function setRua($valor)
        {
            $this->rua = $valor;
        }

        public function getRua()
        {
            return $this->rua;
        }

        public function setNumRua($valor)
        {
            $this->numRua = $valor;
        }

        public function getNumRua()
        {
            return $this->numRua;
        }

        public function setComplemento($valor)
        {
            $this->complemento = $valor;
        }

        public function getComplemento()
        {
            return $this->complemento;
        }

        public function setEmail($valor)
        {
            $this->email = $valor;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setSenha($valor)
        {
            $criptografada = password_hash($valor, PASSWORD_BCRYPT);;
            $this->senha = $criptografada;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setNumConta($valor)
        {
            $this->num_conta = $valor;
        }

        public function getNumConta()
        {
            return $this->num_conta;
        }

        public function setDataCadastro($valor)
        {
            $this->data_cadastro = $valor;
        }

        public function getDataCadastro()
        {
            return $this->data_cadastro;
        }

        public function setSaldo($valor)
        {
            $this->saldo = $valor;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }
    }
?>