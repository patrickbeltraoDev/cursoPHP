<?php

    class Pessoa{
        public $nome;
        public $sobrenome;
        public $endereco;
        public $cpf;

        public function __construct($nome, $sobrenome, $endereco, $cpf){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->endereco = $endereco;
            $this->cpf = $cpf;
        }

        public function viewPessoa(){
            return "Nome: {$this->nome} <br>
                    Sobrenome: {$this->sobrenome} <br>
                    Endereço: {$this->endereco} <br>
                    CPF: {$this->cpf} <br>";
        }

        
    }

    class Usuario extends Pessoa{
        public $matricula;
        public $senha;

        function __construct($nome, $sobrenome, $endereco, $cpf, $senha){
            parent::__construct($nome, $sobrenome, $endereco, $cpf);
            $this->matricula = "@{$this->nome}.{$this->sobrenome}";
            $this->senha = $senha;
        }

        public function viewUsuario(){
            return parent::viewPessoa() .
            "Matricula: {$this->matricula} <br>
                    Senha: {$this->senha} <br>";

        }
    }

    class Medico extends Usuario{
        public $crm;

        function __construct($nome, $sobrenome, $endereco, $cpf, $senha, $crm){
            parent::__construct($nome, $sobrenome, $endereco, $cpf, $senha);
            $this->crm = $crm;
        }

        public function viewMedico(){
            return parent::viewUsuario() . "CRM: {$this->crm} <br>";
        }
    }

    // class Sistema extends Medico{
    //     public $dataConsulta; 
    //     public $horaConsulta; 
    //     public $remedio; 
      

    //     public function marcarConsulta($dataConsulta, $horaConsulta){
    //         $this->dataConsulta = $dataConsulta;
    //         $this->horaConsulta = $horaConsulta;
    //     }

    //     public function verConsulta(){
    //         return "Consulta Agendada <br>
    //                 Data da Consulta: {$this->dataConsulta} <br>
    //                 Hora da Consulta: {$this->horaConsulta} <hr>";
    //     }

    // }

    class Exame extends Medico{
        public $nomeExame;
        public $finalidade;

        function __construct($paciente, $medico, $nomeExame, $finalidade){
            $this->nomeExame = $nomeExame;
            $this->finalidade = $finalidade;
        }

        function verExame(){
            return "{$paciente} <br> {$medico}";
        }
    }








    $pessoa1 = new Pessoa('Patrick', 'Martins', 'Av. Bela Vista', '043.875.421-28');
    echo $pessoa1->viewPessoa();

    echo '<br> <hr>';

    $paciente1 = new Usuario('Thais', 'Sena', 'Av. Bela Vista', '011.430.031-36', 'Miguel2215');
    echo $paciente1->viewUsuario();

    echo '<br> <hr>';

    $medico1 = new Medico('Miguel', 'Sena', 'Av. Vista Bela Q: 1', '111.111.111.-11', 'MiguelGamer', '8888-88');
    echo $medico1->viewMedico();

    echo '<br> <hr>';

    $exame1 = new Exame($paciente1, $medico1, 'Exame de Sangue', 'obs');
    echo $exame1-> verExame();
    
    
