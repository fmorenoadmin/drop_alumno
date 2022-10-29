<!doctype html>
<html>
<head>
	<title>Formulario Eliminar</title>
	<?php
        require_once('./database.php');
        require_once('./alumnos.php');
        $_dbs = new database();
        $_cl1 = new alumnos();
        //-------------------------------
        $dtlist = $_cl1->datalist($_dbs->connect());
	?>
</head>
<body>
	<h1>
		<center>
			<b>
				Formulario Eliminar
			</b>
		</center>
	</h1>
	<form action="busqueda_alu_eliminar.php" method="get">
		<table>
			<tr>
				<td>
					CODIGO
				</td>
				<td>
					<input name="codigo" list="codigos" type="text"/>
                    <datalist id="codigos">
                        <?= $dtlist; ?>
                    </datalist>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Buscar"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>