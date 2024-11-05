<?php
    include ('../app/config.php');

    unset($_SESSION['email']);
    header('Location:'.APP_URL."/login/index.php");
?>