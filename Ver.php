<?php

include ("validar.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>ver</title>
	<style type="text/css">
	#lblusu{
		margin-left: 35%;
	}
	#cerrarsesion{
		margin-left: 10%;
	}
	fieldset{
		margin-left: 25%;
		width: 50%;
		color: grey;
	}
	h2{
		color: grey;
	}
	label{
		color: #999999;
	}

	</style>

</head>
<body>
<fieldset>
<legend>DATOS</legend>
<?php
$Nombre = $_POST['nombre'];
$Telefono = $_POST['telefono'];
$Celular = $_POST['cel'];
$DOmicilio = $_POST['domicilio'];
echo "<h2>NOMBRE:</h2> <label>".$Nombre."</label>";
echo "<h2>TEL&Eacute;FONO:</h2> <label>".$Telefono."</label>";
echo "<h2>CELULAR:</h2> <label>".$Celular."</label>";
echo "<h2>DOMICILIO:</h2> <label>".$DOmicilio."</label>";
?>

<br/>
<br/>
<p>Puede cerrar su sesion aqui: <a href="cerrarsesion.php?">Cerrar sesion</a></p>
	
<a href="index.php">REGRESAR</a>
</fieldset>
</body>
</html>