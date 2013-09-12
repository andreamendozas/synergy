<?php
$quien = $_GET['product'];
$quien2 = $_GET['productid'];
$quien3=$_GET['productinorder'];
$quien4=$_GET['orderid'];
$quien5=$_GET['cant'];
$quien6 = $_GET['url'];
$quien7 = "http://".$quien6;

/*echo $quien2;
echo $quien3;
echo $quien4;
echo $quien5;
echo $quien6;*/



?>


<head>
<script type="text/javascript">
	function inicio(){
		//document.getElementById("formulario").style.display = "none";
		
		
		



			<?php
				$productid= $quien2;
				$productinorder= $quien3;
				$order= $quien4;
				$codigo = $quien5;

				$con=mysql_connect("localhost","root","20111988");
				if(!$con){
		

				}
				mysql_select_db('qplan');




				//Verificar que no tenga codigo asignado
				$existe = "SELECT * FROM `ps_order_code` WHERE order_reference = '".$order."' AND product_id = '".$productid."' AND product_in_order =  '".$productinorder."'";
				$existe1=mysql_query($existe);
				$existee = mysql_num_rows($existe1);
				 
				
				if($existee > 0){
					//Ya tiene un codigo asignado
					//echo $quien6;	
					$envio = $quien7."&status=1";					
					header("location: $quien7 ");
										
					//exit;
				}else{

				
					//Primero se generan los n codigos
					for ($i = 1; $i <= $codigo; $i++) {
						$tohash = date("d-m-Y H:i:s").$i;
						$cod = hash("md5","$tohash");
						$otraquery = "INSERT INTO `ps_codigos`(codigo,tohash) VALUES ('".$cod."','".$tohash."')";
						mysql_query($otraquery);
					}


					
					for($j = 1; $j<=$codigo; $j++){
						$cual = "SELECT codigo  from `ps_codigos` WHERE asignado = 0 LIMIT 1";
						$result = mysql_query($cual);
						$otro = mysql_fetch_assoc($result);
						$otroo = $otro["codigo"]; 

						$otraquery2 = "INSERT INTO `ps_order_code`(codigo,order_reference,product_id,product_in_order) VALUES ('".$otroo."','".$order."','".$productid."','".$productinorder."')";

						$query= "UPDATE ps_codigos SET ASIGNADO =  1 WHERE CODIGO = '".$otroo."'";

						$result2 = mysql_query($otraquery2);
						$asig = mysql_query($query);


					}


				








					mysql_close($con);
					$ir = " pdf2.php?orderid=".$order."&productid=".$productid."&productinorder=".$productinorder;
					header("location: $ir");
				}
			?>
			


			
	}	

</script>
</head>
<body onload="inicio()">

</body>


