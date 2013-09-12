<?php
//Script que genera el PDF con los codigos
$order = $_GET['orderid'];
$product_id = $_GET['productoid'];
$productinorder = $_GET['productoinorder'];
require('fpdf17/fpdf.php');
//create a FPDF object
$pdf=new FPDF();

//set document properties
$pdf->SetAuthor('Lana Kovacevic');
$pdf->SetTitle('FPDF tutorial');

//set font for the entire document
$pdf->SetFont('Helvetica','B',20);
$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P');
$pdf->SetDisplayMode(real,'default');


//display the title with a border around it
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,'Codigos',1,0,'C',0);

//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,50);
$pdf->SetFontSize(10);



$con=mysql_connect("localhost","root","20111988");
mysql_select_db('qplan');
$query =  "SELECT * FROM `ps_order_code` WHERE order_reference = '".$order."' AND product_id = '".$product_id."' AND product_in_order =  '".$productinorder."'";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result,  MYSQL_BOTH)){
	$aux =  $row["codigo"];
	$pdf->Write(5,"$aux". "\n" );
}

mysql_free_result($result);
mysql_close($con);

//Output the document
$pdf->Output('codigos.pdf','D'); 
//header("'location:".$_GET['serv']."'");
?>
