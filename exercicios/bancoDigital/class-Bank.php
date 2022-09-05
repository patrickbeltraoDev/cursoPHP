<?php	

    class Bank{

        //Dados da Conta - ATRIBUTOS
        public $nome = '';
        public $sobrenome = '';
        public $cpf = '';
        public $tipoConta = 'Corrente';
        public $saldo = 0;
        

        function visualizar(){
            return "Nome: {$this->nome} <br>
                    Sobrenome: {$this->sobrenome} <br>
                    CPF: {$this->cpf} <br>
                    Tipo de Conta: {$this->tipoConta} <br>
                    Saldo = {$this->saldo} <hr>
            ";
        }

        function depositar($valor){
            if($valor <= 0){
                echo "Desculpe o valor não pode ser Depositado! <hr>";
            }else{
                $this->saldo += $valor;
                echo "O valor de {$valor},00 foi depositado na sua conta! <hr>";
            }
        }

        function verSaldo(){
            echo "O Saldo atual é {$this->saldo},00 <hr>";
        }

        function sacar($valor){
            if($valor > $this->saldo){
                echo 'Desculpe você não pode sacar um valor menor que o saldo da sua conta! <hr>';
            }else{
                $this->saldo -= $valor;
                echo "Foi sacado de sua conta o valor de {$valor},00 <hr>";
            }
        }

        

    }


    // $cliente1 = new Bank();
    // $cliente1->nome = 'Patrick';
    // $cliente1->sobrenome = 'Beltrão';
    // $cliente1->cpf = '043.875.421-28';

    // echo $cliente1->visualizar();

    // $cliente1->depositar(1000);

    // $cliente1->verSaldo();

    // //$cliente1->depositar(-100);

    // $cliente1->sacar(500);

    // $cliente1->verSaldo();

    // $cliente1->sacar(501);





















?>