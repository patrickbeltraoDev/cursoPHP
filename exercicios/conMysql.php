<?php	

    //Constantes para armazenamento das variáveis de conexão.

    define('HOST', 'localhost');
    define('DBNAME', 'estudos');
    define('USER', 'root');
    define('PASSWORD', '');

    //Concectando com o Servidor

    $conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die ('Não foi possível conectar-se ao banco.');

    if($conn){
        echo 'Conexão bem Sucedida!. <br>';
    }

    //Realizando uma consulta no BD

    $sql = "SELECT codigoaluno, nome, sexo, email from estudos.aluno;";
    $statement = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_result($statement, $codigo, $nome, $sexo, $email);
    mysqli_stmt_execute($statement);
    while(mysqli_stmt_fetch($statement)){
        echo $codigo . ' - ';
        echo $nome . ' - ';
        echo $sexo . ' - ';
        echo $email . ' - ';
        echo '<br>';
    }
    
    //Encerrando a conexão

    mysqli_close($conn);
    
?>