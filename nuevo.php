<!DOCTYPE html>
<?php

include ("validar.php");

?>
<html lang="es">
<head>
<title>Nuevo</title>
	<style type="text/css">
	h1{
		color: #0000ff;
		margin-top: 5%;
		margin-left: 10%;
		font-size: 100px;
	}
#fiel1{
width: 60%;




	}
#inputver{
	width: 15%;
background-color: #3399ff;
color: black;
margin-left: 1%;

}
#NewContact{
	font-size: 50px;
	}
	</style>


</head>

<body>
<?php
echo "<h1 id='NewContact'>Nuevo Contacto</h1>";

?>

<form method="post" action="Ver.php">
<fieldset id="fiel1">
<legend>Nuevo Contacto</legend>
<label id="lblNombre">Nombre</label><br/>
<input type="text" name="nombre" id="txtnombre" size="20" maxlength="40" required><br/>
<label id="lbltelefono">Telefono</label><br/>
		<input type="text" name="telefono" id="txttelefono" size="20" maxlength="40" required><br/>
		<label id="lblcelular">Celular</label><br/>
		<input type="text" name="cel" id="txtcel" size="20" maxlength="40" required><br/>
		<label id="lbldomicilio">Domicilio</label><br/>
		<input type="text" name="domicilio" id="txtdomicilio" size="20" maxlength="40" required><br/>
	<input type="submit" id="inputver" name="btnver" value="Guardar" size="50">
</fieldset>
</form>


</body>



</html>
