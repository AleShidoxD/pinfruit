<html>
<?php
session_start();
$user=$_SESSION['usuario'];
$alu2=$_SESSION['usuario'];
$nom1=$_POST['nom'];
$des1=$_POST['des'];
$arch1=$_FILES['arch'];

	$link=mysqli_connect('localhost','root','','mydb') or die ("Error en el sistema".mysql_error($link));
	$query2= "SELECT * FROM user WHERE idUsuario='$user'";
	$query1="INSERT INTO `mydb`.`imagenes`(`idImagenes`, `nombre`, `descripcion`, `imagen`, `idTags`, `idUsAutor`, `idUsLike`, `numLike`, `user_idUsuario`) VALUES (NULL,'$nom1','$des1','$arch1',1,1,2,2,'$user')";
	?> 
<head>
	<link rel="stylesheet" type="text/css" href="estilo_css.css">
	<meta charset="UTF-8">
	<title>Mi perfil</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<header>
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a href="search.php">
						<img id="fotoperf" src="pics/manzanita.png">
					</a>
				</li>
				<li class="nav-item">
					<a href="myprofile.php">
						<img id="fotoperf" src="pics/perfil.png">
					</a>
				</li>
				<li class="nav-item">
					<a href="timeline.php">
						<p>Pinfruit</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="logout.php">
						<img id="logout" src="pics/salida.png">
					</a>
				</li>
				<li class="nav-item">
					<a href="alta.php">
						<img id="fotoperf" src="pics/config.png">
					</a>
				</li>
			</ul>		
	</header>

	<div id="dos">
		<?php
		$resultado=mysqli_query($link,$query1) or die ("Ups! un error inesperado :v".mysql_error());
		$nr=mysqli_num_rows($resultado);
		//$nr=$resultado;
			if($nr==0){
				echo "Frutalmente delicioso! ^_^";
			}
			else{
				if(mysqli_query($link,$query1));
				echo "Error frutal x_x";
			}
		?>
		<footer>
			<p>Alumnos de Bachillerato pana centro <strong>©grupo cracks</strong> en clase de Capacitación para el trabajo</p>
			<br>
		</footer>	
	</div>
		
</body>
</html>