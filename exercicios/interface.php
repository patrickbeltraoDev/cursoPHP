<?php

    interface Habitate{
        function habitate($habit);
    }

    Class Cachorro implements Habitate{
        public $raca;
        public $nome;
        public $habitate;


        function habitate($habit){
            $this->habitate = $habit;
        }

        function __construct($raca, $nome){
            $this->raca = $raca;
            $this->nome = $nome;
            
        }

        public function aprensetar(){
            return "Raça: {$this->raca} <br>
                    Nome: {$this->nome} <br>
                    Territorio: {$this->habitate}";
        }
    }
        
    $dog1 = new Cachorro('Dalmatas', 'Thor');
    $dog1->habitate('Floresta');
    echo $dog1->aprensetar();
    
    
?>