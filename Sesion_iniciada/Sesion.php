<?php
session_start();
if(($_SESSION["id_usuario"])!=''){
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="../assets/css/estilos2.css">
	<link rel="shortcut icon" href="../assets/images/logo.png">
</head>
<body>
	
	<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
            <img src="../assets/images/logo_black_large.png" class="logo">
        </a>
        <ul>
            <li><a class="active" href="#">Inicio</a></li>
            <li><a href="../Catalogo.php">Trabajos</a></li>
			<li><a href="../src/Cambiocontraseña.php">Contraseña</a></li>
			<li><a href="../src/salir.php"><img src="../assets/images/Iconos/Salir.png" alt=""></a></li>
        </ul>
    </nav>
<section></section>


	<div class="contenido-header">
		<div class="fondo" id="fondo">
			<h1 class="texto">Bienvenido a Muebles Jose´ s</h1>
		</div>
	</div>


	<main class="container" id="Nosotros">
		<div class="row nosotros justify-content-center">
			<div class="col-12 text-center">
				<h2 class="subtitulo"><span>¿Quienes somos?</span></h2>
				<h3 class="titulo">"Los detalles no son solo detalles ellos hacen el diseño."</h3>
				<p>
					Somos una empresa dedicada a la fabricación, producción y venta de toda clase de muebles de interior y exterior. El material de nuestros productos son hechos a base de guadua y madera. Complementamos nuestros servicios, realizando todo tipo de trabajo de carpintería como: puertas, ventanas, closets y cocinas, etc.
				</p>
				<p>
					Contamos con más de 35 años de experiencia en el mercado. Nos diferenciamos por nuestra excelente calidad, novedosos diseños y buenos precios. 
				</p>
				<p>
					Además de nuestras líneas tradiconales, también fabricamos y  personalizamos los productos al gusto de nuestros clientes, satisfaciendo sus necesidades.
				</p>
			</div>
		</div>

		<div class="row productos" id="Productos">
			<article class="col-12 text-center">
				<p class="titulo">INICIEMOS TU PROYECTO</p> <a href="../Formulario.php"></a>
			</article>

			<div class="col-12">
				<div class="row justify-content-center">
					<article class="col-6 col-lg-3 py-1">

					<a button href="../Formulario.php" class="d-block btn-productos">Empezar Proyecto</button> </a>
				</div>
			</div>
		</div>
	</main>

	<div class="separador text-center text-white">
		<p><q>Un nuevo look para tu hogar</q></p>
	</div>

	<div class="container">
		<div class="row acerca-de justify-content-around">
			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="../assets/images/Iconos/icon-team.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">Un equipo de expertos</strong>
							<div class="w-100"></div>
							Nos comprometemos como equipo en esta empresa, a ofrecer lo mejor de nuestros productos.
						</p>
					</figcaption>
				</figure>
			</article>

			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="../assets/images/Iconos/icon-services.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">En union con nuestros clientes</strong>
							<div class="w-100"></div>
							Buscamos ofrecer a los clientes, productos y servicios en muebles de calidad y gran variedad, precios competitivos, asesoría y entrega puntual, apoyados en una excelente plataforma humana y tecnológica, garantizando la satisfacción del cliente y la rentabilidad de la empresa.
						</p>
					</figcaption>
				</figure>
			</article>
		</div>
	</div>

	<div class="container-fluid px-0 galeria">
		<div class="row justify-content-center mx-0 px-0">
			<div class="col-4 px-0 mx-0">
				<img src="../assets/images/Cocina 1.jpg" alt="">
			</div>
			<div class="col-4 px-0 mx-0">
				<img src="../assets/images/Closet 3.jpg" alt="">
			</div>
			<div class="col-4 px-0 mx-0">
				<img src="../assets/images/Puerta 3.jpg" alt="">
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<section class="contacto row justify-content-center">
			<div class="col-12 col-md-9 text-center">
				<h2 class="subtitulo"><span>Contactanos</span></h2>
			</div>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4944022814207!2d-74.10548368255616!3d4.683796099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b6b0a37d83d%3A0xf1859530a183293c!2sCra.%2076%20%2366-21%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1654031793807!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="../assets/imges/Iconos/correo-electronico.png" alt=""> Correo: mueblesjoses6@gmail.com
				</p>
			</div>
		</section>

		<footer class="row justify-content-center redes-sociales">
			<div class="col-auto">
				<a href="#"><img src="../assets/images/iconos/instagram.png" alt=""></a>
				<a href="https://www.facebook.com/people/Muebles-Joses/100086055394256/" target="_blank"><img src="../assets/images/iconos/facebook.png" alt=""></a>
			</div>
		</footer>
	</div>
	<?php
}else{
	header("Location: ../src/index.php");
}
?>
	
	
</body>
</html>