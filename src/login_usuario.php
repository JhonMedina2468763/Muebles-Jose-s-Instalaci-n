<?php
error_reporting(0);
session_start();
include 'conexion.php'; 

if(isset($_POST['Entrar'])) {
    $usuario = $_POST['correo'];
    $user = mysqli_real_escape_string($conexion, $usuario);
    $contrasena = md5($_POST['contrasena']);
    
    $query_admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$user' AND contrasena_A = '$contrasena' AND estado = 1");
    $query_user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$user' AND contrasena_U = '$contrasena' AND estado = 1");
    
    if(mysqli_num_rows($query_admin) > 0) {
        $dato = mysqli_fetch_array($query_admin);
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $dato['id_usuario'];
        $_SESSION['nombres'] = $dato['nombres'];
        $_SESSION['user'] = $dato['correo'];
        header('location: dasboard.php');
    } elseif(mysqli_num_rows($query_user) > 0) {
        $buscador = mysqli_fetch_assoc($query_user);
        $_SESSION ['id_usuario'] = $buscador ['id_usuario'];
        $_SESSION ['nombres'] = $buscador ['correo'];
        echo '<script>alert("Bienvenido")</script>';
        echo '<script>window.location="../Sesion_iniciada/sesion.php"</script>';
    } else {
        echo '<script>alert("Correo o contraseña incorrectos o cuenta bloqueada")</script>';
        echo '<script>window.location="index.php"</script>';
    }
}
?>

