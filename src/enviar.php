<?php
$destino="mueblesjoses6@gmail.com"
$ca=$_post ["ca"]
$np=$_post ["np"]
$tel=$_post ["tel"]
$dir=$_post ["dir"]
$des=$_post ["des"]
$contenido="categoria: ". $ca . "\nnombreproducto: ". $np . "\ntelefono: ". $tel "\ndireccion: ". $dir . "\ndescripcionproducto: ". $des;
mail($destino, $contenido);
header("location:index1.html")
?>