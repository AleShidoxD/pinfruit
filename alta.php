<html>
<?php
	session_start();
	$user=$_SESSION['usuario'];
	$link=mysqli_connect('localhost','root','','mydb') or die ("Error en el sistema :v".mysql_error());
	$query1="SELECT * FROM user WHERE idUsuario='$user'";	
	$resultado=mysqli_query($link,$query1) or die ("Ups! Un error frutal inesperado, mejor pela papas :v".mysql_error());
	$fila=mysqli_fetch_row($resultado);
	$_SESSION['usuario']=$fila[8];
?>
<head>
	<link rel="stylesheet" type="text/css" href="estilo_css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Alta hola yo</title>
</head>
<body>
	

	<div id="dos">
		<div class="container input-group mb-3">
			<form action="alta2.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nombre de la imagen</label>
				    <input name="nom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la imagen" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Selecciona etiqueta</label>
				    <select name="tags" class="form-control" id="exampleFormControlSelect1">
				      <option value="#algo #familia">#Familia</option>
				      <option value="#algo #educacion">#Educación</option>
				      <option value="#algo #salud">#Salud</option>
				      <option value="#algo #biologia">#Biología</option>
				      <option value="#algo #historia">#Historia</option>
				    </select>
				  </div>
				  	<div class="form-group">
					    <label for="exampleFormControlTextarea1">Descripción</label>
					    <textarea name="des" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  				</div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Selecciona el archivo</label>
				    <input name="arch" type="file" name="fileToUpload" id="fileToUpload" required>
				  </div>
				  	<div class="form-group">
				  		<input type="submit" value="Enviar">
						<input type="reset" value="Borrar">
					</div>
			</form>
		<footer>
			<p>Alumnos de Bachillerato pana centro <strong>©grupo cracks</strong> en clase de Capacitación para el trabajo</p>
			<br>
		</footer>
		</div>
		
	</div>
</body>
</html>
