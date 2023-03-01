<?php
session_start();
require("conexion.php");

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "UPDATE cliente SET estado = 0 WHERE idcliente = $id");
    mysqli_close($conexion);
    header("Location: clientes.php");
}
