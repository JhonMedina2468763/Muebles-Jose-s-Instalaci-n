<?php
include 'conexion.php';

session_start();

$usuario = $_SESSION['id_usuario'];
$contrasena_antigua = md5($_POST['contrasena_U']);
$contrasena_nueva = md5($_POST['contrasena_nueva']);
$confirmar_contrasena = md5($_POST['confirmar_contrasena']);

// Verificar que la contraseña actual ingresada coincide con la contraseña almacenada en la base de datos
$verificar_contrasena = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$usuario' AND contrasena_U='$contrasena_antigua'");

if(mysqli_num_rows($verificar_contrasena) == 0){
    echo '
    <script>
    alert("La contraseña actual es incorrecta");
    window.location= "Cambiocontraseña.php";
    </script>
    ';
    exit();
}

if($contrasena_nueva != $confirmar_contrasena){
    echo '
    <script>
    alert("Las contraseñas nuevas no coinciden");
    window.location= "Cambiocontraseña.php";
    </script>
    ';
    exit();
}

$query = "UPDATE usuarios SET contrasena_U = '$contrasena_nueva' WHERE id_usuario = '$usuario'";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Contraseña actualizada correctamente");
    window.location= "Cambiocontraseña.php";
    </script>
    ';
}else{
    echo '
    <script>
    alert("No se pudo actualizar la contraseña, intentalo de nuevo");
    window.location= "Cambiocontraseña.php";
    </script>
    ';
}

mysqli_close($conexion);
?>

