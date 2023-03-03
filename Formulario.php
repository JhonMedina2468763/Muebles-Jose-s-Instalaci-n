<?php
session_start();
if(isset($_SESSION["id_usuario"]) && $_SESSION["id_usuario"]!=''){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>COTIZACION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/estilosco.css">
    <link rel="shortcut icon" href="assets/images/logo.png">
</head>
<body>
    <main>
       <form class="contenedor" action="https://formsubmit.co/mueblesjoses6@gmail.com" method="POST">
        <a href="Sesion_iniciada/Sesion.php"><img src="assets/images/Iconos/volver.png" alt=""></a>
        <h1>Realiza tu pedido</h1>
        <div class="input-group">
            <input type="text" placeholder="Categoria" name="Categoria" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Telefono" name="telefono" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Direccion" name="Direccion" required>
        </div>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" required>
        </div>
        <div class="input-group">
            <textarea class="" type="text" placeholder="Descripcion" name="msg"></textarea>
        </div>
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
       </form>
    </main>
</body>
</html>
<?php
} else {
    header("Location: src/index.php");
    exit();
}
?>
