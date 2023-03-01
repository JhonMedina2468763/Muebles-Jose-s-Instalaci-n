<?php 
session_start();

// Verificar si la variable de sesión está definida
if (!isset($_SESSION['active'])) {
    // Si no existe, redirigir al usuario a la página de inicio de sesión
    header('Location: index.php');
    exit();
}
include_once "includes/header.php";
include "conexion.php";

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['contrasena_U'])) {
        $alert = '<div class="alert alert-danger" role="alert">
        Todo los campos son obligatorios
        </div>';
    } else {
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['correo'];
        $user = $_POST['usuario'];
        $contrasena = md5($_POST['contrasena_U']);
        $query = mysqli_query($conexion, "SELECT * FROM usuarios where correo = '$email'");
        $result = mysqli_fetch_array($query);
        if ($result > 0) {
            $alert = '
            <script>
            alert("Este correo ya esta registrado, intenta con uno diferente");
            </script>
            ';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO usuarios(nombres,apellidos,correo,usuario,contrasena_U) values ('$nombres','$apellidos', '$email', '$user', '$contrasena')");
            if ($query_insert) {
                echo  '
                <script>
                alert("Usuario registrado");
                </script>
                ';
                header("Location: usuarios.php");
            } else {
                $alert = '
                <script>
                alert("Usuario no registrado");
                </script>
                ';
            }
        }
    }
}
?>
<button class="btn btn-warning" type="button" data-toggle="modal" data-target="#nuevo_usuario"><i class="fas fa-plus"></i></button>
<div id="nuevo_usuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-black">
                <h5 class="modal-title" id="my-modal-title">Nuevo Usuario</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" autocomplete="off">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <div class="form-group">
                        <label for="nombres">Nombre</label>
                        <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombres" id="nombres">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" placeholder="Ingrese apellido" class="form-control" name="apellidos" id="apellidos">

                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" placeholder="Ingrese Correo Electrónico" name="correo" id="correo">
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" placeholder="Ingrese Usuario" name="usuario" id="usuario">
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Ingrese Contrasena" name="contrasena_U" id="contrasena" minlength="7" maxlength="10">
                    </div>
                    <input type="submit" value="Registrar" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered mt-2" id="tbl">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php ?>
            <?php
            include "conexion.php";
            $usuarios ="SELECT * FROM usuarios";
            $query = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY estado DESC");
            $result = mysqli_num_rows($query);
            if ($result > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                    if ($data['estado'] == 1) {
                        $estado = '<span class="badge badge-pill badge-success">Activo</span>';
                    } else {
                        $estado = '<span class="badge badge-pill badge-danger">Inactivo</span>';
                    }
            ?>
                    <tr>

                        <td><?php echo $data['id_usuario']; ?></td>
                        <td><?php echo $data['nombres']; ?></td>
                        <td><?php echo $data['apellidos']; ?></td>
                        <td><?php echo $data['correo']; ?></td>
                        <td><?php echo $data['usuario']; ?></td>
                        <td><?php echo $estado; ?></td>
                        <td>
                            <?php if ($data['estado'] == 1) { ?>
                                <a href="editar_usuario.php?id=<?php echo $data['id_usuario']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>
                                <form action="eliminar_usuario.php?id_usuario=<?php echo $data['id_usuario']; ?>" method="post" class="confirmar d-inline">
                                    <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>                                   
                                <td>
                                <a href="../reportes/pdf/index.php?cl=<?php echo $row['id_usuario'] ?>&v=<?php echo $row['id'] ?>" target="_blank" class="btn btn-danger"><i class="fas fa-file-pdf"></i></a>
                                <a href="../reportes/excel/excell.php?cl=<?php echo $row['id_usuario'] ?>&v=<?php echo $row['id'] ?>" target="_blank" class="btn btn-success"><i class="fas fa-file-excel"></i></a>
                                </td>
                                </form>
                            <?php } ?>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>
<?php include_once "includes/footer.php"; ?>