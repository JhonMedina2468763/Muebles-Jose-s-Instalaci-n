<?php
session_start();
require("conexion.php");

if (!empty($_GET['id_usuario'])) {
    $id_usuario = $_GET['id_usuario'];
    $query_delete = mysqli_query($conexion, "UPDATE usuarios SET estado = 0 WHERE id_usuario = $id_usuario");
    mysqli_close($conexion);
    header("Location: usuarios.php");
}
