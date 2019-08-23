<!DOCTYPE html>
<html>
	<head>
		<title>S2a - Contacto</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
		<link href='css/jquery.bxslider.css' rel='stylesheet' type='text/css' />
		<link href='css/template.css' rel='stylesheet' type='text/css' />
		<link href='css/jquery.jscrollpane.css' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/funciones.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	</head>	
	<body id="contacto" class="interna">
		<header>
			<div class="inner">
				<div class="izq">	
					<a class="logo" href="index.php"><img src="images/logo_internas.png" /></a><br />
					<h1><span></span>CONSULTAS:</h1><br clear="all" />
					<p>Realice su consulta y a la brevedad uno de nuestros arquitectos se pondrá en contacto con ud.</p>
					<p>En S2A lo estamos esperando!</p>
				</div>
				<nav class="der">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>|</li>	
						<li><a href="estudio.php">Estudio</a></li>
						<li>|</li>	
						<li><a class="proyectos" href="proyectos.php">Proyectos</a>
							<ul>
								<li><a href="#">Casas</a></li>	
								<li><a class="twolines" href="#">Decoraciones y reformas</a></li>	
								<li><a href="#">Edificios</a></li>	
								<li><a class="twolines" href="#">Oficinas y comercios</a></li>	
							</ul>	
						</li>
						<li>|</li>	
						<li><a href="contacto.php" class="activo">Contacto</a></li>
					</ul>	
				</nav>
			</div>
		</header>
		<div class="content">
			<div class="inner">
				<form id="form_contacto" name="formContacto" method="post" action="">
					<ul>
						<li>
							<label>Nombre:</label>
							<input name="nombre" type="text" required />
						</li>
						<li>
							<label>Apellido:</label>
							<input name="apellido" type="text" required />
						</li>
						<li>
							<label>Teléfono:</label>
							<input name="telefono" type="text" /></li>
						</li>
						<li>
							<label>Mail:</label>
							<input name="apellido" type="email" required />
						</li>
						<li>
							<label>Celular:</label>
							<input name="telefono" type="text" /></li>
						</li>
						<li>
							<label>Localidad:</label>
							<input name="localidad" type="text" /></li>
						</li>
						<li style="width:100%">
							<label>Consulta:</label>
							<textarea name="consulta" required></textarea>
							<input type="submit" id="submit" value="enviar"/>
						</li>
					</ul>
					<div class="gracias">
						<p>Gracias por su consulta!<br />
						A la brevedad nos pondremos en contacto con ustedes</p>
						<span>El equipo de S2A</span>
					</div>
				</form>
			</div>
		</div>
		<footer>
			<div class="inner">
				<div class="direccion">
					<div>
						<strong>Teodoro Garcia  1975  14&#186;A</strong><span>Buenos Aires</span><span>Argentina</span><span>CP 1426</span>
						<a href="mailto:estudios2a@s2a.com.ar">estudios2a@s2a.com.ar</a><span class="tel">54.11.4774.2822</span>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>