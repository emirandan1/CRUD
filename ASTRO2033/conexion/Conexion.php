<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Database{
    
    public function conectar(){
    $config=parse_ini_file('config/configdb.ini');

        try{
            $conexion="mysql:host=".$config['hostname'].";dbname=".$config['dbname']."; charset=".$config['charset'];
            $options=[
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false
            ];
            $pdo=new PDO($conexion,$config['username'],$config['password'],$options);
            //echo 'CONEXION ESTABLECIDA';
            return $pdo;
        }catch(PDOException $e){
            echo 'ERROR DE CONEXION'.$e->getMessage();
            exit;

        }

    }

}  

?>