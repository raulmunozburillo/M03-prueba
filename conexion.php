<?php
require_once "conf.php";
$servidor = "mysql:host=".SERVIDOR.";dbname=".BD;

try{
    $pdo= new PDO ($servidor,USUARIO,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    echo "<script>alert('CONEXION ESTABLECIDA')</script>";
}
catch(Exception $e){
    echo $e->getMessage();
    echo "<script>alert('ERROR DE CONEXION')</script>";
}