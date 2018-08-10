<!doctype html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
<link rel="stylesheet" href="css/Style.css" />
<script src=" js/jquery-3.3.1.min.js"></script>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<section id="wrapper">
		<header>
			<img src="images/logo.png" alt="Logo del restaurante" />
			<nav>
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">CARTA</a></li>
					<li><a href="#">PROMOCIONES</a></li>
					<li><a href="#">CONTACTENOS</a></li>
				</ul>
			</nav>
		</header>
		<!-- Seccion de contenido principal-->
		<section id="main">
			<h1>MENÚ DEL DÍA</h1>
			<?php 
			$platos=array(
			    "carne.jpg",
			    "ensaladas.jpg",
			    "pasta.jpg",
			    "pechuga.jpg",
			    "pizza.jpg",
			    "tarta.jpg",
			    "picada.jpg"
			);
			$precios=array(
			    "410 PESOS",
			    "220 PESOS",
			    "270 PESOS",
			    "230 PESOS",
			    "290 PESOS",
			    "270 PESOS",
			    "450 PESOS"
			);
			/* http://php.net/manual/es/function.date.php
			 * 
			 */
			$diaSemana=date('w');
			$platoDia=$platos[$diaSemana];
			$precioDia=$precios[$diaSemana];
			?>
			<img class="centrar" src="images/<?php echo $platoDia ?>" alt="Plato del día">
			<p class="precio"><?php echo $precioDia ?></p>
			<div id="servicios"></div>
			<script>
			
			</script>
		</section>
		<footer>
		<p>&copy;2018 | Todos los derechos reservados</p>
		</footer>
	</section>
</body>
</html>
