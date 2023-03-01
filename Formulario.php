<?php
session_start();
if(($_SESSION["id_usuario"])!=''){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>COTIZACION</title>
    <link rel="stylesheet" type="text/css" href="assets/css/estilosco.css">
    <link rel="shortcut icon" href="assets/images/logo.png">

</head>

<body>
    <main>
       <form class="contenedor__login-register"action="https://formsubmit.co/mueblesjoses6@gmail.com" method="POST" >
        <a href="Sesion_iniciada/Sesion.php"><img src="assets/images/Iconos/volver.png" alt=""></a>
        <center><h1>Realiza tu pedido</h1></center>
        <center><input type="text" placeholder="Categoria" name="Categoria" required>
        <input type="text" placeholder="Telefono" name="telefono" required>
        <input type="text" placeholder="Direccion" name="Direccion" required>
        <input type="email" placeholder="Email" name="email" required>
        <textarea class="" placeholder="Descripcion" name="msg"></textarea></center>
        <center><input type="submit" value="Enviar"></center>
     </form>
    </main>
</body>
</html>
<?php
}else{
	header("Location: src/index.php");
}
?>