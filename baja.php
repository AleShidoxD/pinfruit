<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo_css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Baja</title>
</head>
<body>
	<header>
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a href="search.php">Búsqueda
					<img id="fotoperf" src="pics/manzanita.png">
				</a>
			</li>
			<li class="nav-item">
				<a href="myprofile.php">Perfil
					<img id="fotoperf" src="pics/perfil.png">
				</a>
			</li>
			<li class="nav-item">
				<a href="timeline.php">
					<p>Pinfruit</p>
				</a>
			</li>
			
			<li class="nav-item">
				<a href="alta.php">Mis frutitas
					<img id="fotoperf" src="pics/config.png">
				</a>
			</li>
			<li class="nav-item">
				<a href="logout.php">Salir
					<img id="fotoperf" src="pics/salida.png">
				</a>
			</li>
		</ul>		
	</header>
	<div id="dos">
			<form action="baja2.php" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nombre de la imagen</label>
				    <input name="idimg" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Id de la imagen que deseas borrar" required>
				  </div>
				  	<div class="form-group">
				  		<input type="submit" value="Eliminar">
					</div>
			</form>
			<footer>
			<p>Alumnos de Bachillerato pana centro <strong>©grupo cracks</strong> en clase de Capacitación para el trabajo</p>
			<br>
		</footer>
	</div>	
</body>
</html>