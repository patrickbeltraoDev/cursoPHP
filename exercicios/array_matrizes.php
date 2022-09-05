<?php
    $dados = [
        "pessoa1" => [
            "nome" => "Patrick",
            "idade" => 30,
            "peso" => 80
        ],
        "pessoa2" =>[
            "nome" => "Thais",
            "idade" => 36,
            "peso" => 55
        ],
    ];

    print_r($dados);
    echo '<br>';
    echo '<br>';
    print_r($dados["pessoa2"]["nome"]);

    $dados[] = [
        "pessoa3" => [
            "nome" => "Miguel",
            "idade" => "7",
            "peso" => 22
        ],
        "pessoa4" => [
            "nome" => "Samuel",
            "idade" => 4,
            "peso" => 14
        ],
    ];

    echo '<br>';
    echo '<br>';
    print_r($dados);

    $dados["pessoa2"]["altura"] = 162;

    echo '<br>';
    echo '<br>';

    print_r($dados["pessoa2"]);