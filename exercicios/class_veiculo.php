<?php

    class Categoria{
        public $tipo = "Terrestre";

        function __construct($tipo){
            $this->tipo = $tipo;
        }

        function verTipo(){
            echo "Categoria - Veículo: {$this->tipo} <br>";
        }
    }

    class Veiculo extends Categoria{
        public $modelo = "Passeio";

        function __construct($tipo, $modelo){
            parent::__construct($tipo);
            $this->modelo = $modelo;
        }

        function verModelo(){
            parent::verTipo();
            echo "Modelo - Veículo: {$this->modelo} <br>";
        }
    }

    class Componentes extends Veiculo{
        public $roda = "Aro-15";
        public $portas = "4";
        public $cilindros = 16;
        public $painel = "Digital";

        function __construct($tipo, $modelo, $roda, $portas, $cilindros, $painel){
            parent::__construct($tipo, $modelo);
            $this->roda = $roda;
            $this->portas = $portas;
            $this->cilindros = $cilindros;
            $this->painel = $painel;
        }
        function verCarros(){
            parent::verModelo();
            echo "Rodas: {$this->roda} <br> Portas: {$this->portas} <br> Cilindros: {$this->cilindros} <br> Painel: {$this->painel}";
        }
    }

    $veiculo1 = new Componentes("Terrestre", "Passeio", "Aro-14", 4, 16, "Digital");
    $veiculo1->verCarros();
    echo '<hr>';

    $veiculo2 = new Componentes("Terrestre", "Transporte", "Aro-20", 2, 25, "Analogico");
    $veiculo2->verCarros();
    echo '<hr>';




    class A{
        public $publico = "Valor público";
        protected $protegido = "Valor protegido";
        private $privado = "Valor privado";

        public function mostrarA(){
            echo "{$this->privado}";
        }
    }










































?>