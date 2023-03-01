<?php 
include("cn.php");
$cliente ="SELECT * FROM cliente";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=clientes.xls");
?>
<table border="1">
    <caption> Datos de los Clientes</caption>
    <tr>
    <th>ID_Cliente</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Direccion</th>
    </tr>
    <?php $resultado = mysqli_query($conexión, $cliente);
    while($row=mysqli_fetch_assoc($resultado)){  ?>
    <tr>
    <td><?php echo $row['idcliente']; ?></td>
    <td><?php echo $row['nombre']; ?></td>
    <td><?php echo $row['telefono']; ?></td>
    <td><?php echo $row['direccion']; ?></td>
</td>
</tr>
    <?php } mysqli_free_result($resultado);?>
</table>