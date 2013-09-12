<?php
$productid= $_POST['productoid'];
$productinorder= $_POST['productoinorder'];
$order= $_POST['orderid'];
$codigo = $_POST['code'];






$con=mysql_connect("localhost","root","20111988");
if(!$con){
		

}
mysql_select_db('qplan');



$otraquery = "INSERT INTO `ps_order_code`(codigo,order_reference,product_id,product_in_order) VALUES ('".$codigo."','".$order."','".$productid."','".$productinorder."')";

$query= "UPDATE ps_codigos SET ASIGNADO =  1 WHERE CODIGO = '".$codigo."'";

$result2 = mysql_query($otraquery);
$asig = mysql_query($query);




mysql_close($con);



header('location:http://qplan.localhost/admin6896/index.php?controller=AdminOrders&id_order=2&vieworder&token=42c19d5eba1ed78d3cea5cbdf67165d8&code='.$codigo); 

?>
