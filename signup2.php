<html>
<?php
$user=$_POST['user1'];
$pass=$_POST['pass1'];
	$link=mysqli_connect('localhost','root','','mydb') or die ("Error en el sistema".mysql_error());
	$query1="SELECT * FROM user WHERE name='$user'";
	$query2="INSERT INTO `mydb`.`user` (`idUsuario`, `name`, `mail`, `password`, `admin`, `idUsSiguiendo`, `idUsSiguiendome`, `idImaSuvidas`, `IdImaGuardadas`, `IdImaLike`) VALUES (NULL, '$user', '', '$pass', NULL, NULL, NULL, NULL, NULL, NULL)";
	?>
<head>	
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<title>Registro</title>
	<style type="text/css">


#tres{

	background-color: #801313;
	width: 55px;
	height: 5px;
	margin: 0 auto;
	padding: 40px;
	border-radius: 50px;
	text-align: center;
}
</style>
</head>
<body>
	<div id="uno"><a href="login.php"><div id="icono2"></div></a><div id="tit">
		<?php
		$resultado=mysqli_query($link,$query1) or die ("Falleció el sistema".mysql_error());

	$nr=mysqli_num_rows($resultado);
	if($nr>=1){
		echo "El usuario ya existe";
	}
	else{
			if(mysqli_query($link,$query2)){
				echo "Usuario registrado exitosamente";
			}
			else{
				echo "No se pudo registrar";
			}
		}
		
	?>
	</div></div>
	<div id="dos">
	</div>
	<div id="tres"><a href="login.php">Volver</a>
</div>

</body>
</html>