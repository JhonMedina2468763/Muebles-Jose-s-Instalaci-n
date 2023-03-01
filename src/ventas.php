<?php 
session_start();

// Verificar si la variable de sesión está definida
if (!isset($_SESSION['active'])) {
    // Si no existe, redirigir al usuario a la página de inicio de sesión
    header('Location: index.php');
    exit();
}
include_once "includes/header.php";
require("conexion.php");
?>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <h4 class="text-center">Datos del Cliente</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post">
                    <div class="row">
                        <div class="col-lg-4">
                            <div>
                                <input type="hidden" id="idcliente" value="1" name="idcliente" required>
                                <label>Nombre</label>
                                <input type="text" name="nom_cliente" id="nom_cliente" class="form-control" placeholder="Ingrese nombre del cliente" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="number" name="tel_cliente" id="tel_cliente" class="form-control" disabled required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Dirreción</label>
                                <input type="text" name="dir_cliente" id="dir_cliente" class="form-control" disabled required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-warning text-white text-center">
                Datos Venta
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><i class="fas fa-user"></i> VENDEDOR</label>
                            <p style="font-size: 16px; text-transform: uppercase; color: red;"><?php echo $_SESSION['nombres']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                Buscar Producto
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input id="producto" class="form-control" type="text" name="producto" placeholder="Ingresa la categoria o nombre">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="tblDetalle">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Precio Total</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody id="detalle_venta">

                </tbody>
                <tfoot>
                    <tr class="font-weight-bold">
                        <td colspan=3>Total Pagar</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <div class="col-md-6">
        <a href="#" class="btn btn-warning" id="btn_generar"><i class="fas fa-save"></i> Generar Venta</a>
    </div>

</div>
<?php include_once "includes/footer.php"; ?>