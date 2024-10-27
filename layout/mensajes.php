<?php
    if( (isset($_SESSION['mensaje'])) && (isset($_SESSION['icono']) )){
        $mensaje=$_SESSION['mensaje'];
        $icono=$_SESSION['icono'];
        ?>
        <script>
            Swal.fire({
              position: "top-end",
              icon: "<?=$icono;?>",
              title: "<?=$mensaje;?>",
              showConfirmButton: false,
              timer: 4000
            });
        </script>
<?php
//permite eliminar una sesion en especifico
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
}
?>