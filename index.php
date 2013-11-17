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
				comer,vagar
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
	<div class="twelve columns">
		<?php $array = array(
			'Nunca le haría pop a tu nombre','Eres la maxima prioridad dentro del heap de mi corazon','La vida es corta'
		);
		echo $array[rand(0,2)];
		?>
 	</div>
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
