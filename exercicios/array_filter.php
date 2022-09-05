<?php

    $notas = [5.2, 6.5, 7.3, 8.4, 5.9, 6.9, 7.5, 9.8, 9.5, 7.3];
    $alunos = ['patrick', 'thais', 'miguel', 'samuel', 'dalvina'];

    $notasEscolares = [
        'Carla' => 7.9,
        'Gustavo' => 5.8,
        'Andreia' => 4.9,
        'Paulo' => 6.8,
        'Juliana' => 7.0,
        'Cristina' => 6.8
    ];

    function status($array){
        return $array >= 7;
    }
    $situacao = array_filter($notasEscolares, 'status');
    print_r($situacao);
    