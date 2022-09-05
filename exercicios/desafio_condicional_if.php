<div class="titulo" style= "font-size: 30px; margin-bottom: 50px;">Desafio Operadores Lógicos</div>


<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div style= "font-size: 20px; margin-bottom: 50px;">
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1"></option>
            <option value="2">Executado</option>
            <option value="3">Não Executado</option>
        </select>
    </div>
    <div style= "font-size: 20px; margin-bottom: 50px;">
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1"></option>
            <option value="2">Executado</option>
            <option value="3">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

if ($_POST['t1'] === '2' && $_POST['t2'] === '2'){
    echo 'Vamos ao shopping comprar uma tv de 50"  e tomar sorvete!';
}elseif ($_POST['t1'] === '2' xor $_POST['t2'] === '2'){
    echo 'Vamos ao shopping comprar uma tv de 32" e tomar sorverte!';
}elseif($_POST['t1'] === '3' && $_POST['t2'] === '3'){
    echo 'Vamos ficar em casa!';
}else{
    echo'Sem informação';
};




















