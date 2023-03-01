<?php
    $servidor="localhost";
	$usuario= "root";
	$clave= "";
	$base="muebles jose_s";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $base,);

    /*if($conexion){
        echo 'Conectado exitosamente a la base de datos';
    }else{
        echo 'No se ha podido conectar a la base de datos';
    }
?>*/