<?php

	$conexion=mysqli_connect('localhost','root','','pagina');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="shortcut icon" href="img/minilogo.png" type="Logo de la pagina">
</head>
<body>
<header class="headertabla">
<h1>Total Look Base de Datos </h1>
<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>email</td>
			<td>fecha_reg</td>
		</tr>

		<?php
		$sql="SELECT * from datos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['fecha_reg'] ?></td>
		</tr>
	<?php
	}
	 ?>
	</table>
	</header>
</body>
</html>
