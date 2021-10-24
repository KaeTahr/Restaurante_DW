<?php
  // son las configuraciones del servidor de la base de datos, Archivo: ConexionBD.php
	define("cServidor","localhost");
	define("cUsuario","prueba");
	define("cClave","password");
	define("cBd","restaurante_dw");
	
	function consultaBD($consulta) {
		
		$conexion  = mysqli_connect(cServidor,cUsuario,cClave,cBd);
		$resultado = mysqli_query($conexion,$consulta);
		
		if($resultado)
			return $resultado;
		else
			return FALSE;
		
	}
	
	?>
		