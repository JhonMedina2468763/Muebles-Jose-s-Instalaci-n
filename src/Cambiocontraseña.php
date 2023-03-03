<?php
session_start();
if(isset($_SESSION["id_usuario"]) && $_SESSION["id_usuario"]!=''){
?>
<!DOCTYPE html>
<head>
	<title>Formulario de Cambio de Contraseña</title>
	<link rel="stylesheet" href="../assets/css/stylecontraseña.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<main>
		<form action="cambiar_contrasena.php" method="POST">
			<h1>Cambio de Contraseña</h1>
			<label for="contrasena_antigua">Contraseña Actual:</label>
			<input type="password" id="contrasena_U" name="contrasena_U"  minlength="7" maxlength="10" required>

			<label for="contrasena_nueva">Contraseña Nueva:</label>
			<input type="password" id="contrasena_nueva" name="contrasena_nueva"  minlength="7" maxlength="10" required>

			<label for="confirmar_contrasena">Confirmar Contraseña:</label>
			<input type="password" id="confirmar_contrasena" name="confirmar_contrasena"  minlength="7" maxlength="10" required>

			<input type="submit" value="Cambiar Contraseña">
		</form>
		<div class="back-button">
			<a href="../Sesion_iniciada/Sesion.php">Volver</a>
		</div>
	</main>
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>
