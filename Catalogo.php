<?php
session_start();
if(($_SESSION["id_usuario"])!=''){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Catalogo Muebles Jose's</title>
	<link rel="stylesheet" href="assets/css/estiloscag.css?2365">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="shortcut icon" href="assets/images/logo.png">

	<script src="assets/js/jquery-3.2.1.js"></script>
	<script src="assets/js/scriptcat.js"></script>
</head>
<body>
	
	<div class="wrap">
		<h1>Nuestros Trabajos </h1>
		<div class="botoncito1">
			
			<a href="Sesion_iniciada/Sesion.php"><img src="assets/images/Iconos/volver.png" alt=""></a>
		</div>

		
		
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="Cocinas">Cocinas Integrales</a>
				<a href="#" class="category_item" category="Puertas">Puertas</a>
				<a href="#" class="category_item" category="Closets">Closets</a>
				<a href="#" class="category_item" category="Juegos de Alcoba">Juegos de Alcoba</a>
				<a href="#" class="category_item" category="Escritorios">Escritorios</a>
			</div>

		



			<section class="products-list">
				<div class="product-item" category="Puertas">
					<a href="detalles_productos/puertas/Caracteristicas_puertas1.html"><img src="assets/images/puertas 1 (2).jpg" alt="" ></a>
				
				</div>
				<div class="product-item" category="Puertas">
					<a href="detalles_productos/puertas/caracteristicas_puertas2.html"><img class="puerta3" href="#" src="assets/images/puerta 2.jpg" alt="" ></a>
			
				</div>
				<div class="product-item" category="Closets">
					<a href="detalles_productos/closets/Caracteristicas_closets1.html"><img class="closets" src="assets/images/closet 1.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Closets">
					<a href="detalles_productos/closets/Caracteristicas_closets2.html"><img class="closets" src="assets/images/closet 2.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Closets">
					<a href="detalles_productos/closets/Caracteristicas_closets3.html"><img class="closets" src="assets/images/Closet 3.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Closets">
					<a href="detalles_productos/closets/Caracteristicas_closets4.html"><img class="closets" src="assets/images/Closet 4.jpg" alt="" ></a>
				
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina1.html"><img class="cocinas" src="assets/images/Cocina 1.jpg" alt="" ></a>
				
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina2.html"><img class="cocinas" src="assets/images/cocina 2.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina3.html"><img class="cocinas" src="assets/images/Cocina 3.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina4.html"><img class="cocinas" src="assets/images/Cocina4.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina5.html"><img class="cocinas" src="assets/images/cocina 11.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Escritorios">
					<a href="detalles_productos/escritorios/Escritorios.html"><img class="escritorios" src="assets/images/escritorio 1.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina6.html"><img class="cocina" src="assets/images/cocina 12.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina7.html"><img class="cocinas" src="assets/images/cocina 6.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Puertas">
					<a href="detalles_productos/puertas/caracteristicas_puertas3.html"><img class="puertas" src="assets/images/Puerta 3.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina8.html"><img class="cocinas" src="assets/images/Cocina 5.jpg" alt="" ></a>
				
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina9.html"><img class="cocinas" src="assets/images/Cocina 7.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Cocinas">
					<a href="detalles_productos/cocinas/Caracteristicas_cocina10.html"><img class="cocinas" src="assets/images/Cocina 8.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Closets">
					<a href="detalles_productos/closets/Caracteristicas_closets5.html"><img class="closets" src="assets/images/closet 5.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Puertas">
					<a href="detalles_productos/puertas/Caracteristicas_puertas4.html"><img class="puertas" src="assets/images/puerta 4.jpg" alt="" ></a>
					
				</div>
				<div class="product-item" category="Juegos de Alcoba">
					<a href="detalles_productos/juegosdealchoba/Caracteristicas_juegosdealcoba.html"><img class="juegosdealcoba" src="assets/images/juego de alcoba 2.jpg" alt="" ></a>
					
				</div>
			</section>
		</div>
	</div>

</body>
</html>
<?php
}else{
	header("Location: src/index.php");
}
?>