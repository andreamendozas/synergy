<?php

$codigo = $_POST['codigo'];
$con=mysql_connect("localhost","root","20111988");
mysql_select_db('qplan');
$otra_query = "SELECT * FROM `ps_orders` WHERE reference = '".$codigo."' ";
$quienes = mysql_query($otra_query);
$cuantos= mysql_num_rows($quienes);
$query2 = "SELECT * FROM `ps_activos` WHERE codigo ='".$codigo."'";
$esta = mysql_query($query2);
$existe = mysql_num_rows($esta);
if ($cuantos >0){ //CHEQUEO QUE EXISTA EN LAS ORDENES
	if($existe!=0){ //CHEQUEO QUE NO EXISTA EN ACTIVOS
		$query = "INSERT INTO ps_activos(codigo) VALUES ('".$codigo."')";
		// Check connection
		mysql_query($query);
	}
}
mysql_close($con);
header('location:mymodule_page.php'); 

?>
