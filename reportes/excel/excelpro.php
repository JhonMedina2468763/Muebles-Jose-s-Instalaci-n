<?php 
include("cn.php");
$producto ="SELECT * FROM producto";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=productos.xls");
?>
<table border="1">
    <caption> Datos de los Prouctos</caption>
    <tr>
    <th>Cod Producto</th>
    <th>Categoria</th>
    <th>Decripcion</th>
    <th>Precio</th>
    <th>Existencia</th>
    </tr>
    <?php $resultado = mysqli_query($conexión, $producto);
    while($row=mysqli_fetch_assoc($resultado)){  ?>
    <tr>
    <td><?php echo $row['codproducto']; ?></td>
    <td><?php echo $row['Categoria']; ?></td>
    <td><?php echo $row['descripcion']; ?></td>
    <td><?php echo $row['precio']; ?></td>
    <td><?php echo $row['existencia']; ?></td>
</td>
</tr>
    <?php } mysqli_free_result($resultado);?>
</table>
    