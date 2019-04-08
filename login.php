<html>	
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php	

echo 
"<div id='cg'>
<div id='log'></div>
<div id='encabezado'></div>
<div id='n'> <div id='contenido'><form action='verify.php' method='POST'>
		<table>
			
			<tr height='40px'>
				<td><p align='right'>Usuario:</p></td><td><input name='user1'type='text'></td>
			</tr>
			
			<tr height='40px'><br><br>
				<td><p align='right'>Contraseña:</p></td><td><input name='pass1'type='text'></td>
			</tr>
		
			<tr height='40px'>
				<td colspan='2' align='center'><input type='submit' value='Ingresar'>
				</td>
				</tr>
				<tr height='40px'>
				<td colspan='2' align='center'><div id='cuatro'><a href='signup.php'>Registrarse</a></div>
				</td>
				</tr>
		</table>

	</form></div></div>
	</div>"
 ?>
</body> 
</html>

