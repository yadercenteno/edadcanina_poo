<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Edad de una mascota Canina</title>
</head>
<body>
	<h1>Edad de una mascota Canina</h1>
	<?php
	include("clasePerro.php"); 
	
	// Se ha enviado el formulario
	if (isset($_REQUEST['calcular'])) {		
		$edad = $_REQUEST['edad']; 

		// Si lo recibido es un número, prosigo
		if (is_numeric($edad)) {
			$perro = new Perro();
			$perro->getEdadCanina($edad);
		}
		else {
			echo "La edad ingresada NO es un número válido.  Intentalo de nuevo";
		}

		echo "<br>";
		echo "<br>";
		echo "[ <a href='index.php'>Regresar</a> ]";
	}
	else { 		
 		// Mostrar el formulario
 	?>
 		<form class="bordes" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			Ingrese la edad de su mascota:
			<input type="number" min="0" step="1" name="edad">
			<input type="submit" name="calcular" value="Calcular">
		</form>
	<?php
 	}
 	?>
</body>
</html>