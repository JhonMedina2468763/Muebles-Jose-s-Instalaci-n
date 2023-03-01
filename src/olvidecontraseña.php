
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/css/olvidoco.css">
    <title>Olvidar contraseña</title>
</head>
<body>

        <main>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Recuperar-->
                    <form action="olvidecontraseña.php" method="POST">
                    <a href="../src/salir.php"><img src="../assets/images/Iconos/volver.png" alt=""></a>
                    <center><h2>Recuperar Contraseña</h2></center>
                    <center><input required type="text" name="email" value="" placeholder="email"/><br/></center>
                    <center><input type="submit" value="Recordar contraseña" /></center>
        </form>
        
</div>

        </main>
</body>
</html>
        

        <?php
		try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            //$mail->isSMTP();                                            //Send using SMTP
            //$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            //$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            //$mail->email   = 'mueblesjoses6@gmail.com';                     //SMTP username
            //$mail->Password   = 'epxdmoergkrnquqt';                               //SMTP password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            //$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //$mail->setfrom('mueblesjoses6@gmail.com','ADMINISTRADOR');
            //$mail->addAddress('correo');
			if(isset($_POST['email']) && !empty($_POST['email'])){
                $pass = substr(md5(microtime()), 0, 8);
                $mail = $_POST['email'];
                $encriptada = md5($pass);
                
                //Conexion con la base
                $conn = mysqli_connect("localhost", "root","", "muebles jose_s",);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "Update usuarios Set contrasena_U ='$encriptada' Where correo='$mail'";

                if ($conn->query($sql) === TRUE) {
                    echo "usuario modificado correctamente ";
                } else {
                    echo "Error modificando: " . $conn->error;
                }
                
                $to = $_POST['email'];//"destinatario@email.com";
                $from = "From: " . "Muebles Jose's" ;
                $subject = "Su contraseña ha sido actualizada satisfacoriamente";
                $message = "Muebles jose´s le asigno la siguiente clave " . $pass;

                mail($to, $subject, $message, $from);
                    echo '
                    <script>
                    alert("El correo fue enviado satisfactoriamente");
                    window.location="index.php";
                    </script>
                    ';
                    exit;    
            }
        }
		catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
            
        ?>
    </body>
</html>