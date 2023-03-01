<?php 
include("cn.php");
$usuarios ="SELECT * FROM usuarios";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=usuarios.xls");
?>
<table border="1">
    <caption> Datos de los Usuarios</caption>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Correo</th>
    <th>Usuario</th>
    <th>Contraseña</th>
    </tr>
    <?php $resultado = mysqli_query($conexión, $usuarios);
    while($row=mysqli_fetch_assoc($resultado)){  ?>
    <tr>
    <td><?php echo $row['id_usuario']; ?></td>
    <td><?php echo $row['nombres']; ?></td>
    <td><?php echo $row['apellidos']; ?></td>
    <td><?php echo $row['correo']; ?></td>
    <td><?php echo $row['usuario']; ?></td>
    <td><?php echo $row['contraseña']; ?></td>
</td>
</tr>
    <?php } mysqli_free_result($resultado);?>
</table>
    
