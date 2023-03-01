<?php
error_reporting();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>  
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/css/estilosin.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Si cuentas con una cuenta registrada inicia sesión para entrar al sitio.</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión.</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input required type="email" placeholder="Correo Electronico" name="correo">
                        <input required type="password" placeholder="Contraseña" name="contrasena" id="contrasena" minlength="7" maxlength="10">
                        <a class="contraseña" href="olvidecontraseña.php" >¿Olvidaste tu contraseña?</a>
                        <input class="button" type="submit" name="Entrar" value="Entrar"></a>
                    </form>

                    <!--Register-->
                    <form action="registro_usuario.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input required type="text" placeholder="Nombres" name="nombres">
                        <input required type="text" placeholder="Apellidos" name="apellidos">
                        <input required type="email" placeholder="Correo Electronico" name="correo">
                        <input required type="text" placeholder="Usuario" name="usuario">
                        <input required type="password" placeholder="Contraseña" name="contrasena" id="contrasena" minlength="7" maxlength="10">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script>
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();// llamando a la función (opcional)
});

// siguiente es el código para cambiar el botón de la barra lateral (opcional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");// reemplazando la clase de iconos
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");// reemplazando la clase de iconos 
 }
}




        </script>
        <script src="../assets/js/scriptiniciar.js"></script>
</body>
</html>
