<html>
<?php
session_start();
$idimg1=$_POST['idimg'];
	$link=mysqli_connect('localhost','root','','mydb') or die ("Error en el sistema :v".mysql_error());
	$query1="SELECT * FROM imagenes WHERE IdImagenes='$idimg1'";
	$resultado=mysqli_query($link,$query1) or die ("No sabes que pasa sinceramente :v".mysql_error());
	$query2="DELETE FROM `mydb`.`imagenes` WHERE `imagenes`.`IdImagenes` = '$idimg1' ";
	$nr=mysqli_num_rows($resultado);
	?> 
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
			<?php
				if($nr>=1){
				if(mysqli_query($link,$query2)){
					echo "Imagen eliminada";
				}
				else{
					echo "No se puede eliminar la imagen";
				}
			}
				else{
					echo "No existe el ID";
				}
			?>
			<p>Alumnos de Bachillerato pana centro <strong>©grupo cracks</strong> en clase de Capacitación para el trabajo</p>
			<br>
		</footer>
	</div>	
</body>
</html>