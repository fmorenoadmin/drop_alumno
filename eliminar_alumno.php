<!doctype html>
<html>
<head>
    <title>Resultados de Eliminación</title>
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
        $res1= mysqli_query($link,$sql);
        if ($res1) {
            if ($res1->num_rows > 0) {
        		$drop= "DELETE FROM alumnos WHERE codigo LIKE '".$codigo."' ;";
        		$res = mysqli_query($link,$drop);
        		if ($res){
        			echo 'El registro ha sido eliminado';
        		}else{
                    echo 'No se pudo eliminar el registro';
        		}
            }else{
                echo 'No existe el código o ya fue eliminado.<br/>';
                echo '<a href="./">Regresar al formulario de busqueda</a>';
            }
        }else{
            echo 'No se ejecutó la consulta.<br/>';
    		echo '<a href="./">Regresar al formulario de busqueda</a>';
        }
	?>
</body>
</html>