


<form action ="cargar.php" method="post">
Seleccione el cliente: 
<select>
<?php




$con=mysql_connect("localhost","root","20111988");
if(!$con){
		

}
mysql_select_db('qplan');
//$query = "SELECT razon FROM `ps_customer_pv`";
$query = "SELECT id_customer,firstname FROM `ps_customer`";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result,  MYSQL_BOTH)){
	
	echo '<option value="'.$row['id_customer'].'">'.$row['firstname'].'</option>';
}


mysql_close($con);



?>
</select><br><br>
¿Cuantos codigos de GOURMET desea generar?
<input type=text id="codigosG" name="codigosG"><br><br>
¿Cuantos codigos de CUIDATE desea generar?
<input type=text id="codigosC" name="codigosC"><br><br>
¿Cuantos codigos de AVENTURA desea generar?
<input type=text id="codigosA" name="codigosA"><br><br>
¿Cuantos codigos de APRENDE desea generar?
<input type=text id="codigosAP" name="codigosAP"><br><br>
¿Cuantos codigos de ESPECIALES desea generar?
<input type=text id="codigosE" name="codigosE"><br><br>
<input type="submit" value="Enviar">
</form>
