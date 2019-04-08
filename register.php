<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<title>Universidad Registro</title>
	<style type="text/css">

table{
	line-height: 25px;
}
td{
	text-align: right;
}
		#icono{
			width: 80px;
			height: 80px;
			background-image: url(pics/pin.png);
			float: right;
			}
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

		<div id="uno"><a href="login.php"><div id="icono2"></div></a><div id="tit"><p>Registro</p></div><a href="index.html"><div id="icono"></div></a></div><br>
	<div id="dos">
		<table><form action="registro2.php" method="POST">
		<tr>
				<td>Usuario:</td><td><input name="user1" type="text"></td>
			</tr>
			<tr>
				<td>Contraseña:</td><td><input name="pass1" type="password"></td>
			</tr>
	<tr>
				<td>Confirmar contraseña:</td><td><input name="passa" type="password"></td>
			</tr>
			
					<tr>
				<td colspan="2" ><input type="reset" value="Borrar">
				</td>
				
				<td colspan="2" ><input type="submit" value="Registrar">
				</td>
	
				</tr>
			
		</table></form>
</div>
<div id="tres"><a href="index.php">Volver</a>
</div>
</body>
</html>
