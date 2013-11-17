<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Ratas Recursivas</title>
  
  <!-- Foundation CSS (Comprimidos) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <!-- Le traemos modernizr tambien-->
  <script src="javascripts/modernizr.foundation.js"></script>
</head>

<body>

<!-- Header -->
<header>
<div class="row">
    <div class="four columns">
        <img src="images/perfil_rata.jpg" alt="Foto Perfil Rattus" height="100" width="100" />
    </div>
    <div class="eight columns">
        <h1>Ratas Recursivas 2013</h1>
    </div>
    <hr>
</div>

<div class="row">
    <div class= "twelve columns text-center">
        <h2>Ingeniera Sofware SO2-2013 UTEM</h2>
    </div>
    <hr>
</div>
  
</header>

<div class="row">
    <div class="twelve columns text-center">
    	<img src="images/labtocat.png" height="100" width="100" />
    	<h6><a href="https://github.com/RatasRecursivas">Ratas Recursivas en Github</a></h6>
    </div>
    <hr>
</div>

<div class="row">
	<div class="four columns">
		<div class="twelve columns text-center">
			<img src="images/foto_pato.png" height="100" width="100">
		</div>

		<div class="row">
			<div class="three columns" >
				Nombre:
			</div>
			<div class="nine columns">
				Patricio Pérez Valverde
			</div>
		</div>
		<br>

		<div class="row">
			<div class="three columns" >
				Carrera:
			</div>
			<div class="nine columns">
				Ing. Informática
			</div>
		</div>
		<br>

		<div class="row">
			<div class="three columns" >
				Gusto:
			</div>
			<div class="nine columns">
				comer,vagar
			</div>
		</div>
		<br>

		<div class="row">
			<div class="twelve columns" >
				<a href="mailto:patricio.perez@ceinf.cl">Contacto</a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="twelve columns" >
				<a href="http://alumnos.informatica.utem.cl/~pperez/">Pagina Personal</a>
			</div>
		</div>

    </div>
	<div class="four columns">
		<div class="twelve columns text-center">
			<img src="images/foto_seba.png" height="100" width="100">
		</div>

		<div class="row">
			<div class="three columns" >
				Nombre:
			</div>
			<div class="nine columns">
				Sebastián Rocha Reyes
			</div>
		</div>
		<br>

		<div class="row">
			<div class="three columns" >
				Carrera:
			</div>
			<div class="nine columns">
				Ing. Informática
			</div>
		</div>
		<br>

		<div class="row">
			<div class="three columns" >
				Gusto:
			</div>
			<div class="nine columns">
				Programar, carretear, andar en bicicleta y varios más
			</div>
		</div>
		<br>

		<div class="row">
			<div class="twelve columns" >
				<a href="mailto:sebastian.rocha@ceinf.cl">Contacto</a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="twelve columns" >
				<a href="http://alumnos.informatica.utem.cl/~srocha/">Pagina Personal</a>
			</div>
		</div>
		<br>
	</div>
	<div class="four columns">
		<div class="twelve columns text-center">
			<img src="http://static.freepik.com/foto-gratis/icono-de-usuario-masculino_17-810120247.jpg" height="100" width="100">
		</div>

		<div class="row">
			<div class="three columns" >
				Nombre:
			</div>
			<div class="nine columns">
				Natalia Tarifeño Ortiz
			</div>
		</div>
		<br>

		<div class="row">
			<div class="three columns" >
				Carrera:
			</div>
			<div class="nine columns">
				Ing. Informática
			</div>
		</div>
		<br>

		<div class="row">
			<div class="three columns" >
				Gusto:
			</div>
			<div class="nine columns">
				comer,vagar
			</div>
		</div>
		<br>

		<div class="row">
			<div class="twelve columns" >
				<a href="mailto:natalia.tarifeno@ceinf.cl">Contacto</a>
			</div>
		</div>
		<br>
	</div>
	<hr>
</div>

<div class="row">
	<?php
	$frases = array("Los ordenadores son inútiles. Sólo pueden darte respuestas.",
		"Los ordenadores son como los bikinis. Ahorran a la gente el hacer muchas conjeturas.",
		"Preguntarse cuándo los ordenadores podrán pensar es como preguntarse cuándo los submarinos podrán nadar.",
		"Hardware: las partes de un ordenador que pueden ser pateadas.",
		"La mayoría de las patentes son una mierda. Dedicar tiempo a leerlas es estúpido. Es cosa de los propietarios de las patentes hacerlo y procurar que se respeten.",
		"No te preocupes si no funciona bien. Si todo estuviera correcto, serías despedido de tu trabajo.",
		"Primero resuelve el problema. Entonces, escribe el código.",
		"Iterar es humano, 'recursivar' es divino.",
		"El uso de COBOL daña la mente. Su enseñanza debería ser considerada como un ataque criminal.",
		"El buen código es su mejor documentación.",
		"El primer 90% del código corresponde al primer 90% del tiempo de desarrollo. El 10% restante corresponde al otro 90% del desarrollo.",
		"Si la depuración es el proceso de eliminar errores, entonces la programación debe ser el proceso de introducirlos.",
		"No puedes crear un gran software sin un gran equipo, y la mayoría de los equipos de desarrollo se comportan como familias disfuncionales."
		);
	$autores = array("-- Pablo Picasso",
		"-- Sam Ewing",
		"-- Edsger W. Dijkstra",
		"-- Jeff Pesis",
		"-- Linus Torvalds",
		"-- Ley de Mosher de la Ingeniería del Software",
		"-- John Johnson",
		"-- L. Peter Deutsch",
		"-- E. W. Dijkstra",
		"-- Steve McConnell",
		"-- Tom Cargill",
		"-- Edsger W. Dijkstra",
		"-- Jim McCarthy"
		);
	$azar = rand(0,13);
	echo '<div class="twelve columns text-center">';
		echo $frases[$azar];
 	echo '</div>';
 	echo <br>
 	echo '<div class="twelve columns text-center">';
 		echo $autores[$azar];
 	echo '</div>'
 	?>
	<hr>
</div>

<footer>
	<div class="row">
		<div class="twelve columns">
			<p>Tecnologias utilizadas:</p>
			<ul>
				<li>HTML5</li>
				<li>PHP5</li>
				<li>Foundation CSS Framework</li>
			</ul>
		</div>
	</div>
</footer>
</body>
</html>
