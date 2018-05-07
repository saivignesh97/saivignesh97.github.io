<!--
<html>
<head>
<title>Confirmation</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,600" rel="stylesheet">

</head>
<body>
<style>
body{
	background-color: #0067AD;
	color: #fff;
	font-family: 'Josefin Sans',sans-serif;
	font-size: 30px;

}
p{
	position: absolute;
	top:200;
	left:100;
}
span{
	color:#fff;
	font-weight: 600;
}
</style>

<p id="msg"> You have registered successfully as an alumni. The ID card has been downloaded to your Desktop. An additional copy is sent to the registered mail ID.<br> <span>Please wait while you are being redirected...</span></p>
</body>
</html>
-->
<?php
/*
    Download PhpMailer from the following link:
    https://github.com/Synchro/PHPMailer (CLick on Download zip on the right side)
    Extract the PHPMailer-master folder into your xampp->htdocs folder
    Make changes in the following code and its done :-)

    You will receive the mail with the name Root User.
    To change the name, go to class.phpmailer.php file in your PHPMailer-master folder,
    And change the name here: 
    public $FromName = 'Root User';
*/
require("PHPMailer/PHPMailerAutoload.php");
   require_once('tcpdf/tcpdf.php');  

//or select the proper destination for this file if your page is in some   //other folder
ini_set("SMTP","ssl://smtp.gmail.com"); 

ini_set("smtp_port","587");


$name=$_POST['postname'];
$roll=$_POST['postroll'];
$dep=$_POST['postdep'];
//$branch=$_POST['postbranch'];
$dp=$_POST['postdp'];
$yop=$_POST['postyop'];
$city=$_POST['postcity'];
$addr=$_POST['postaddr'];
$val=substr($yop,4);
$yop1 = str_replace($val,'',$yop);
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("E- Card");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('times');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins('25', '5', '25');  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('times', '', 12);  
      $obj_pdf->AddPage();  
      //$content = '';  
      $html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>

   
    table{
        //color: #003300;
        font-family: times;
        font-size: 16pt;
        background-color:white;
        width:105%;
    margin-left:500px!important;



    }
    td {
        font-size:16px;
        font-weight:bold;
    }
    td.second {
    }
   

    #title{
font-size:18px;
text-decoration:none;
 border:none;
}


 h1 {
        color: #3F74A9;
        font-family: times;
        font-size: 24pt;
    }
    img{
        position:absolute;
        left:600;

    }
    div{
      position:absolute;
      border:2px solid black;
    }
</style>
<div>
<table class="first" cellpadding="4" cellspacing="4" width="600">
 <tr>
    <td width="160"></td>

  <td width="375" height="50" align="center" ><img src="images/Logo.jpg" /></td></tr>
 <tr>
  <td width="80"  rowspan="0.5" class="second"><img src="images/dp4.png"/></td>
  <td width="160"></td>
  <td width="160">Name :  </td>
  <td width="220">{$name}</td>
  
 </tr>
 <tr>
   <td width="120"></td>

 <td width="120" rowspan="9" class="second"><img src="{$dp}"/></td>

  <td width="160" >Alumni Reg.No : </td>
  <td width="160">{$roll}</td>
 </tr>
 <tr>
   <td width="120"></td>

  <td width="160">Year of Passing : </td>
  <td width="160">{$yop1}</td>
 </tr>
  <tr>
    <td width="120"></td>

  <td width="160">City : </td>
  <td width="160">{$city}</td>
 </tr>
 <tr>
   <td width="120"></td>

  <td width="160">Degree : </td>
  <td width="160">{$dep}</td>
 </tr>
 <tr>
   <td width="120"></td>

  <td width="160">Address : </td>
  <td width="190">{$addr}</td>
 </tr>
 <tr>
   <td width="120"></td>

  <td width="160">Validity : </td>
  <td width="160">{$val}</td>
 </tr>
 
 <tr>
    <td width="100"></td>
 
  <td width="500" height="20"><img src="images/footer.png"/></td>
 
 </tr>
</table>
</div>
EOF;
       
       
      $obj_pdf->writeHTML($html);  
      $obj_pdf->Output(dirname(__FILE__).'/E-Cards/' .$name. '-SSN-ALUMNI-ECARD.pdf', 'F');  


 //No further need to edit your configuration files.
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->SMTPSecure = "tls";
$mail->Username = "alumniofficer@ssn.edu.in"; //account with which you want to send mail. Or use this account. i dont care :-P
$mail->Password = "ssn@alumni"; //this account's password.
$mail->Port = "587";
$mail->setFrom('alumniofficer@ssn.edu.in','SSN Alumni Admin');
$rec1= $_POST['postmail']; //receiver. email addresses to which u want to send the mail.
$mail->AddAddress($rec1);
$mail->Subject  = "Reg- SSN Alumni ID Card";
$mail->Body     = "Hi , Your Alumni E-card has been successfully generated. We have attached the E-Card along with this mail.";
$filename = $_POST['postname'];
$mail->addAttachment(dirname(__FILE__)."/E-Cards/" .$filename. "-SSN-ALUMNI-ECARD.pdf");
$mail->WordWrap = 200;

if(!$mail->Send()) {
} else {
//         echo "<script> setTimeout(redirect, 5000);

// function redirect() {

// location.href='index.html';


// } </script>";
//                 exit;
  }


?>
