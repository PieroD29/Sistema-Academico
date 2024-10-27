<?php
/*Conexion a base de datos */
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistema_academico');

/*Nombre del sitio*/
define('APP_NAME','SISTEMA DE COLEGIO SAN MARCOS');
/*Asignar la URL*/
define('APP_URL','http://localhost/cursos/sistema_academico/');
/**direccion exacta por google maps */
define('KEY_API_MAPS','');

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "conexion exitosa a la base de datos";
}catch(PDOException $e){
    echo"error no se pudo conectar a la base de datos";
}
/*Zona horararia dependiendo del pais */
date_default_timezone_set("America/Lima");
$fechaHora = date(format: 'Y-m-d H::i::s');

$fech_actual = date (format:'Y-m-d');
$dia_actual = date(format:'d');
$dia_mes = date(format:'m');
$dia_ano = date(format:'Y');