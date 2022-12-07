<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ITLATrailers</title>
	<!--Enlaze a documento CSS-->
	<link rel="stylesheet" href="style.css">
	<!--Imagen de Icono-->
	<link rel="shortcut icon" href="Imagenes/PlayLogo.ico" type="image/x-icon">
	<!--Font Aweson-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
	<!--Font Google-->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap');
	</style>
</head>
<body>
	<!--Principio del Header-->
	<header class="header-container">
		<h1>ITLA Trailers</h1>
		<img src="Imagenes/Icon_Play.png" title="play" class="img1">
	</header>
	<!--Final del Header-->
	<!--Principio del Nav-->
	<nav class="nav-container">
		<ul>
			<li><a href="Index.html">Inicio</a></li>
			<li><a href="Peliculas.html">Peliculas</a></li>
			<li><a href="Series.html">Series</a></li>
			<li><a href="Anime.html">Anime</a></li>
			<li><a href="Estrenos.html">Estrenos</a></li>
		</ul>
		<form class="search">
			<input type="text" placeholder="Buscar" class="input-container">
			<i class="fas fa-search"></i>
		</form>
	</nav>
	<br>
	<br>
	<!--Final del Nav-->
	<!--Cuerpo de la Pagina(Trailers)-->
	<div class="php">
	<?php
		$Admin = "Administrador";
		$Pass = "123456";
		$Video = '<iframe width="480" height="250" src="https://www.youtube.com/embed/u9Mv98Gr5pY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		$Video1 = '<iframe width="480" height="250" src="https://www.youtube.com/embed/jz1FrtMIh5c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		$AdminCliente = $_POST['Usuario'];
		$PassCliente = $_POST['Password'];

		if($AdminCliente == $Admin and $PassCliente == $Pass){
			echo 'Saludos administrador, ¿Desea agregar un video?';
		}
		else{
			echo 'No son iguales';
		}
	?>
	</div>

	<!--Footer-->
	<footer class="footer-container">
		<p>Profesor: Luis "El PAPA" Soto, Programacion Web &#169</p>
		<p>Jeremy Encarnacion, Matricula: 2019-8665</p>
		<p>Anthony Beltre</p>
		<p>Dariel Salas</p>

	</footer>
</body>
</html>
