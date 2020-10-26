<?php
class Perro {	
	function getEdadCanina($edadHumana) {
		$edadCanina = $edadHumana * 7;

		$mensaje = "Su mascota tiene ".$edadCanina." años en edad canina";
		
		echo $mensaje;
	}
}
