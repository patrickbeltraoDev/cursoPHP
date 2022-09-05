<?php

$notas = [5.2, 6.5, 7.3, 8.4, 5.9, 6.9, 7.5, 9.8, 9.5, 7.3];

$alunos = ['patrick', 'thais', 'miguel', 'samuel', 'dalvina'];

$nots = array_map('round', $notas);
print_r($nots);
echo "<br>";

$nomes = array_map('strtoupper', $alunos);
print_r($nomes);
echo "<br>";




















?>