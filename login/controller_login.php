<?php

    include ('../app/config.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND estado = '1' ";
    $query = $pdo->prepare($sql);
    $query->execute();

    $usuarios = $query->fetchAll( PDO::FETCH_ASSOC );

    $contador = 0;

    foreach($usuarios as $usuario){
        $password_table = $usuario['passwordd'];
        $contador = $contador + 1;
    }

    if ( $contador > 0 && $password === $password_table ){

        session_start();
        $_SESSION['mensaje'] = "Bienvenido al sistema";
        $_SESSION['icono'] = "success";
        $_SESSION['email'] = $email;
        header('Location:'.APP_URL."/admin");

    } else {

        session_start();
        $_SESSION['mensaje'] = "Los datos introducidos son incorrectos, vuelva a intentarlo";
        $_SESSION['icono'] = "error";

        header('Location:'.APP_URL."/login/index.php");
    }

?>