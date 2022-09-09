<?php   

    class Cadastro{

        private $pdo;

        public function __construct($sgbd, $dbname, $host, $user, $senha){
            try{
                $pdo = new PDO("{$sgbd}:dbname={$dbname};host={$host}", $user, $senha);
            }
            catch(PDOException $e){
                echo "Erro com o acesso ao banco de dados: " . $e->getMessage();
            }catch(Exception $e){
                echo "Erro Genérico: " . $e->getMessage();
            }
        }

        function buscarDados(){
            $res = array(); 
            $cmd = $this->pdo->query("SELECT * FROM clientes.cdo ORDER BY id DESC");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }




        
    }













?>