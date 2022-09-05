<?php

    $array = array();
    $entrada = $_POST['in'];
    $i = 0;
    
    if(isset($_POST['in'])){
        $array[$i] = $entrada;
        $i += 1;
        
    }

    print_r($array);
    echo'<br>';
    echo $i;
    
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="in">
    </form>
    



</body>
</html>