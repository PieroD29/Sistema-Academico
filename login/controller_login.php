<?PHP
include ('../app/config.php');

// Recibir datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta SQL preparada para evitar inyección SQL
$sql ="SELECT * FROM usuarios WHERE email ='$email' AND estado ='1' ";
$query = $pdo->prepare($sql);
$query->execute();


// Obtener los resultados
$usuarios = $query->fetchALL(fetch_style: PDO::FETCH_ASSOC);

// Imprimir resultados
//print_r($usuarios);

$contador = 0;

foreach ($usuarios as $usuario){
    $password_tabla = $usuario ['password'];
    $contador = $contador +1;
}

// Verificar si se encontró el usuario y si la contraseña es correcta
if (($contador > 0) && (password_verify($password, $password_tabla)) ){
    echo "Los datos son correctos";
    session_start();
    $_SESSION['mensaje'] = "Bienvenido al sistema ";
    $_SESSION['icono'] = "success";
    $_SESSION['sesion_email'] = $email;
    header ('Location: '.APP_URL."/admin");
} else {
    echo "Los datos son incorrectos";
    //al momento de iniciar sesion si el usario es incorrecto
    session_start();
    $_SESSION['mensaje'] = "Los datos introducidos son incorrectos";
    $_SESSION['icono'] = "error";
    header ('Location: '.APP_URL."/login");
}