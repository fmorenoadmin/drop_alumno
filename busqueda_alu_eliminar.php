<!doctype html>
<html>
<head>
	<title>Resultados</title>
</head>
<body>
	<?php
		$codigo=$_GET["codigo"];
		//----------------------------------
		require('./database.php');
		$_dbs = new database();
		//----------------------------------
		$link = $_dbs->connect();
		if ($link){
			echo 'servidor conectado';
			echo "<br>";
		}else{
			echo 'no se pudo conectar con el servidor';
		}	
		//----------------------------------
		$sql = "SELECT * FROM alumnos WHERE codigo LIKE '".$codigo."';";
		$res = mysqli_query($link,$sql);
		if ($res){
			//----------------------------------
			echo '<br>';
			echo '<b>¿ELIMINAR ALUMNO?</b>';
			echo '<br>';
			echo '<br>';
			//echo "<table>";
			echo "<form method='get' action='eliminar_alumno.php'>";
				While ($fila=mysqli_fetch_array($res,MYSQLI_ASSOC)){
					//echo "<tr><td>";
					echo "<input type='text' name='codigo' value='".$fila['codigo']."'><br>";
					echo "<input type='text' value='".$fila['apellidos']."'><br>";
					echo "<input type='text' value='".$fila['nombres']."'><br>";
					echo "<input type='text' value='".$fila['direccion']."'><br>";
					echo "<input type='text' value='".$fila['especialidad']."'><br>";
					//----------------------------------
					echo "<input type='submit' name='Aceptar' value='Eliminar'>";
				}
			echo "</form>";
		}else{
			echo 'no se pudo conectar con el servidor';
			echo 'codigo no existe';
		}
		//----------------------------------
		mysqli_close($link);
	?>
	<br>
</body>
</html>