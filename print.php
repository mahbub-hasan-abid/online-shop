<?php                
require 'config.php'; 
include_once('TCPDF/tcpdf.php');

session_start();

$user_id = $_SESSION['user_id'];

//$email=$_SESSION['user_email'];
//echo $email;
// $user = $_POST["user_id"];

 //echo $user_id ;
$order_query = mysqli_query($conn, "SELECT * FROM orders WHERE user_id =$user_id  ");// or die('query failed');

$fetch_orders = mysqli_fetch_assoc($order_query);

// $sql1 = mysqli_query($con, "SELECT * FROM user WHERE  email='$email' ");
// $user = mysqli_fetch_assoc($sql1);


// $sql2 = mysqli_query($con, "SELECT * FROM quiz WHERE  eid='$eid' ");
// $exam = mysqli_fetch_assoc($sql2);

// $sql3 = mysqli_query($con, "SELECT * FROM history  WHERE  eid='$eid' ");
// $history = mysqli_fetch_assoc($sql3);

$count = mysqli_num_rows($order_query);

if($count>0) 
{
	// $inv_mst_data_row = mysqli_fetch_array($inv_mst_results, MYSQLI_ASSOC);

	//----- Code for generate pdf
	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);  
	//$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
	$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$pdf->SetDefaultMonospacedFont('helvetica');  
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
	$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
	$pdf->setPrintHeader(false);  
	$pdf->setPrintFooter(false);  
	$pdf->SetAutoPageBreak(TRUE, 10);  
	$pdf->SetFont('helvetica', '', 12);  
	$pdf->AddPage(); //default A4
	//$pdf->AddPage('P','A5'); //when you require custome page size 

	$content = ''; 

	$content .= '
	<style type="text/css">
	body{
	font-size:12px;
	line-height:24px;
	font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	color:#000;
	}
	</style>    
	<table cellpadding="0" cellspacing="0" style="border:1px solid #ddc;width:100%;">
	<table style="width:100%;" >
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><td colspan="2" align="center"><b>Order Details</b></td></tr>
  <br><br><br>
	<tr><td colspan="2"><b>Placed On : '.date("d-m-Y", strtotime($fetch_orders['placed_on'])).' </b></td></tr>
	<tr><td><b>Name : '.$fetch_orders['name'].' </b></td><td align="right"> </td></tr>

  <tr><td><b>Email : '.$fetch_orders['email'].' </b></td><td align="right"></td></tr>
  <tr><td><b>Address : '.$fetch_orders['address'].' </b></td><td align="right"></td></tr>
  <tr><td><b>Payment method : '.$fetch_orders['method'].' </b></td><td align="right"></td></tr>
  <tr><td><b>your orders : '.$fetch_orders['total_products'].' </b></td><td align="right"></td></tr>
  <tr><td><b>total : '.$fetch_orders['total_price'].' tk </b></td><td align="right"></td></tr>






</table>'; 
$pdf->writeHTML($content);


//$file_location = "/opt/lampp/htdocs/examples/generate_pdf/uploads/"; //for local xampp server


//$file_name = $fetch_orders['name']."'s order from বইমেলা.pdf";
ob_end_clean();


$pdf->Output('invoice.pdf', 'D');
// $pdf_content=$pdf->output('','S');

// require_once'sendmail.php';
// $subject='Order Placed!';
// $body='Your order has been placed.Your invoice is here ';
// $sendEmail($email,$subject,$body,$pdf_content,'boi mela');
// $pdf->Output($file_name, 'I');
// if($_GET['ACTION']=='VIEW') 
// {
// 	$pdf->Output($file_name, 'I'); // I means Inline view
// } 
// else if($_GET['ACTION']=='DOWNLOAD')
// {
// 	$pdf->Output($file_name, 'D'); // D means download
// }
// else if($_GET['ACTION']=='UPLOAD')
// {
// $pdf->Output($file_location.$file_name, 'F'); // F means upload PDF file on some folder
// echo "Upload successfully!!";
// }

//----- End Code for generate pdf
}
else
{
	echo 'Record not found for PDF.';
}
	


?>