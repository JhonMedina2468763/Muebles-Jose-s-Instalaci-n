<?php
session_start();
require("conexion.php");

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "UPDATE producto SET estado = 0 WHERE codproducto = $id");
    mysqli_close($conexion);
    header("Location: productos.php");
}
