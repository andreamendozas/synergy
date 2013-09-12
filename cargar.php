<?php
/*Script que genera la cantidad de códigos que se solicitaron*/
$codigo = $_POST['codigos'];
$con=mysql_connect("localhost","root","20111988");
if(!$con){
		

}
mysql_select_db('qplan');

for ($i = 1; $i <= $codigo; $i++) {
	//$cod = hash("md5","$i"); //Cifrado de código
	$tohash = date("d-m-Y H:i:s").$i;
	$cod = hash("md5","$tohash");
	//$codsi = substr("$tohash", -6);
	$otraquery = "INSERT INTO `ps_codigos`(codigo,tohash) VALUES ('".$cod."','".$tohash."')";//Inserta el codigo en ps_codigos

	mysql_query($otraquery);
}


mysql_close($con);



header('location:pdf.php'); 
//echo "<script type=\"text/javascript\">alert(\"Los códigos se generaron correctamente\");</script>";  




?>

