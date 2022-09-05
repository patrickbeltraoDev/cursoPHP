<?php

    class Data{

        public $dia = '01';
        public $mes = '01';
        public $ano = '1970';

        public function exibir(){
            $date = "{$this->dia}/{$this->mes}/{$this->ano}";
            return $date;
        }

        public function convert($dados){
            
            $array = [
                '01' => 'Janeiro',
                '02' => 'Fevereiro',
                '03' => 'Março',
                '04' => 'Abril',
                '05' => 'Maio',
                '06' => 'Junho',
                '07' => 'Julho',
                '08' => 'Agosto',
                '09' => 'Setembro',
                '10' => 'Outubro',
                '11' => 'Novembro',
                '12' => 'Dezembro'
            ];

            foreach($array as $indice => $mes){
                if($indice == substr($dados, 3, 2)){
                    $newDate = str_replace(substr($dados, 3, 2), $mes, $dados);
                    echo $newDate;
                }
            }

            


        }
    }

    $data = new Data();

    echo $data->exibir(), '<br>';

    $data->dia = '01';
    $data->mes = '11';
    $data->ano = '1992';

    echo $data->exibir(), '<br>';

    $data->convert($data->exibir());
    










?>