
<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estados">
        <option value="AC">Acre</option>
        <option value="GO">Goiás</option>
        <option value="DF">Distrito Federal</option>
    </select>
    <button>Enviar</button>
</form>


<?php

print($_GET);

echo '<br';
echo '<br';

print_r($_POST);


?>

<style>
    form > * { 
        font-size: 1.8rem;
    }

</style>

