<!DOCTYPE html>
<?php

include ("validar.php");

?>
<html>
<head>
	<title>Sesi&oacute;n</title>
	<style type="text/css">
	
#inputnew{
	width: 15%;
background-color: #3399ff;
color: black;
margin-left: 60%;

}
</style>


</head>
<body>
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>ID</b></font></td>
<td><font face="verdana"><b>NOMBRE</b></font></td>
<td><font face="verdana"><b>TELEFONO</b></font></td>
<td><font face="verdana"><b>CELULAR</b></font></td>
<td><font face="verdana"><b>DIRECCION</b></font></td>
<td><font face="verdana"><b>COLONIA</b></font></td>
<td><font face="verdana"><b>CODIGO POSTAL</b></font></td>
</tr>

<?php  
  $link = @mysql_connect("localhost", "root","0569")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("registro", $link)
      or die ("Error al conectar a la base de datos.");

  $query ="SELECT d.id, d.nombre, d.telefono, d.celular,d.direccion,d.colonia,d.cp " .
      "FROM datos d";
  $result = mysql_query($query);
  $numero = 0;
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["id"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["telefono"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["celular"]. "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["direccion"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["colonia"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["cp"] . "</font></td></tr>";		
		
    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Numero registros: " . $numero . 
      "</b></font></td></tr>";
  
  mysql_free_result($result);
  mysql_close($link);
?>
</table>

<form method="post" action="nuevo.php">
	<input type="submit" id="inputnew" name="btnnuevo" value="Nuevo" size="50">
</form>

</body>
</html>
