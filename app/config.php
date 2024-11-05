<?php

    //VARIABLES GLOBALES -------------------------------

    define('SERVIDOR','localhost'); //Nombre del servidor donde se esta ejecutando el proyecto
    define('USUARIO','root'); //Nombre del usuario ( "root" por defecto de XAMPP)
    define('PASSWORD',''); //Contraseña ( "" por defecto de XAMPP)
    define('BD','sistema_gestion_escolar'); //Nombre de la base de datos

    define('APP_NAME', 'SISTEMA DE GESTION ESCOLAR');
    define('APP_URL', 'http://localhost:3000');
    define('KEY_API_MAPS', '');
    define('','');
    
    date_default_timezone_set('America/Lima'); //Asignar la zona horaria a la de Peru/Lima
    $fecha_hora = date(format:'Y-m-d H:i:s');
    $fecha_actual = date(format:'Y-m-d');
    $dia_actual = date(format:'d');
    $mes_actual = date(format:'m');
    $anio_actual = date(format:'Y');

    //VARIABLES GLOBALES -------------------------------

    //CONEXION A LA BD ---------------------------------

    $servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

    try{

        $pdo = new PDO($servidor, USUARIO, PASSWORD, array( PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8" ) );
        //echo "Conectado a la base de datos";

    } catch( PDOException $e){

        print_r($e);
        //echo "Conexion fallida";

    }

    //CONEXION A LA BD ---------------------------------

?>