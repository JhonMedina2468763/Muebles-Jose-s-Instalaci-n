<?php include_once "includes/header.php";
require "conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['correo']) || empty($_POST['usuario'])) {
        $alert = '<div class="alert alert-danger" role="alert">Todo los campos son requeridos</div>';
    } else {
        $id_usuario = $_GET['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $sql_update = mysqli_query($conexion, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos', correo = '$correo' , usuario = '$usuario' WHERE id_usuario = $id_usuario");
        $alert = '<div class="alert alert-success" role="alert">Usuario Actualizado</div>';
    }
}

// Mostrar Datos

if (empty($_REQUEST['id'])) {
    header("Location: usuarios.php");
}
$id_usuario = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
    header("Location: usuarios.php");
} else {
    if ($data = mysqli_fetch_array($sql)) {
        $idcliente = $data['id_usuario'];
        $nombres = $data['nombres'];
        $apellidos = $data['apellidos'];
        $correo = $data['correo'];
        $usuario = $data['usuario'];
    }
}
?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-warning text-black">
                Modificar Usuario
            </div>
            <div class="card-body">
                <form class="" action="" method="post">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <input type="hidden" name="id" value="<?php echo $id_usuario; ?>">
                    <div class="form-group">
                        <label for="nombre">Nombres</label>
                        <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombres" id="nombres" value="<?php echo $nombres; ?>">

                    </div>
                    <div class="form-group">
                        <label for="nombre">Apellidos</label>
                        <input type="text" placeholder="Ingrese apellido" class="form-control" name="apellidos" id="apellidos" value="<?php echo $apellidos; ?>">

                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="text" placeholder="Ingrese correo" class="form-control" name="correo" id="correo" value="<?php echo $correo; ?>">

                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" placeholder="Ingrese usuario" class="form-control" name="usuario" id="usuario" value="<?php echo $usuario; ?>">

                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                    <a href="usuarios.php" class="btn btn-danger">Atras</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>