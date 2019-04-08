<html>
<?php
session_start();
$user=$_POST['user1'];
$pass=$_POST['pass1'];
	$link=mysqli_connect('localhost','root','','mydb') or die ("Error en el sistema".mysql_error());
	$query1="SELECT * FROM user WHERE name='$user' AND password='$pass'";
	$resultado=mysqli_query($link,$query1) or die ("No se que pasa sinceramente".mysql_error());
	$fila=mysqli_fetch_row($resultado);
	$nr=mysqli_num_rows($resultado);

	?>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
		<meta charset="UTF-8">
	<title>Universidad</title>
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
	<div id="uno"><a href="login.php"><div id="icono2"></div></a><div id="tit"><p>Pinfrut</p></div></div>

	</div>
	<div id="dos"><?php
		if($nr==0){
	echo "Contraseña o usuario incorrecta";
}
	else{
		header ("location:timeline.php");
		}
		?></div>
		<div id="tres"><a href="login.php">Volver</a>
</body>
</html>