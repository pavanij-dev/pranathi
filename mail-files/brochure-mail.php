<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if($_POST['name']){ $name=$_POST['name']; }
if($_POST['email']){ $email=$_POST['email']; }
if($_POST['countryCode']){ $countryCode=$_POST['countryCode']; }
if($_POST['phone']){ $phone=$_POST['phone']; }
if($_POST['location']){ $location=$_POST['location']; }
if($_POST['flattype']){ $flattype=$_POST['flattype']; }
if($_POST['budget']){ $budget=$_POST['budget']; }
if($_POST['utm_campaign']){ $utm_campaign=$_POST['utm_campaign']; }
if($_POST['SRD_val']){ $SRD_val=$_POST['SRD_val']; }


if($email && $phone)
{
 
date_default_timezone_set("Asia/Kolkata");

$subject = 'Enquiry for Pranathi Kiara';

$message = "<!DOCTYPE HTML>
<html xmlns='http://www.w3.org/1999/xhtml'>

<head>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>

<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;'>
<title>Email Template</title>
<style type='text/css'>
body {
width: 100%;
background-color: #EFEFEF;
margin: 0;
padding: 0;
-webkit-font-smoothing: antialiased;
}
html {
width: 100%;
}
table {
font-size: 14px;
border: 0;
}
@media only screen and (max-width: 640px) {
.header-bg {
width: 440px !important;
height: 10px !important;
}
.main-header {
line-height: 28px !important;
}
.main-subheader {
line-height: 28px !important;
}
.container {
width: 440px !important;
}
.container-middle {
width: 420px !important;
}
.mainContent {
width: 400px !important;
}
.main-image {
width: 400px !important;
height: auto !important;
}
.banner {
width: 400px !important;
height: auto !important;
}
.section-item {
width: 400px !important;
}
.section-img {
width: 400px !important;
height: auto !important;
}
.prefooter-header {
padding: 0 10px !important;
line-height: 24px !important;
}
.prefooter-subheader {
padding: 0 10px !important;
line-height: 24px !important;
}
.top-bottom-bg {
width: 420px !important;
height: auto !important;
}
}

@media only screen and (max-width: 479px) {

.header-bg {
width: 280px !important;
height: 10px !important;
}
.top-header-left {
width: 260px !important;
text-align: center !important;
}
.top-header-right {
width: 260px !important;
}
.main-header {
line-height: 28px !important;
text-align: center !important;
}
.main-subheader {
line-height: 28px !important;
text-align: center !important;
}

.logo {
width: 260px !important;
}
.nav {
width: 260px !important;
}
.container {
width: 280px !important;
}
.container-middle {
width: 260px !important;
}
.mainContent {
width: 240px !important;
}
.main-image {
width: 240px !important;
height: auto !important;
}
.banner {
width: 240px !important;
height: auto !important;
}

.section-item {
width: 240px !important;
}
.section-img {
width: 240px !important;
height: auto !important;
}

.prefooter-header {
padding: 0 10px !important;
line-height: 28px !important;
}
.prefooter-subheader {
padding: 0 10px !important;
line-height: 28px !important;
}

.top-bottom-bg {
width: 260px !important;
height: auto !important;
}
}

</style>
</head>

<body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
<table border='0' width='100%' cellpadding='0' cellspacing='0'>
<tr>
<td height='20'></td>
</tr>
<tr>
<td>
<table border='0' width='560' align='center' cellpadding='0' cellspacing='0' class='container-middle'>
<tr>
<td>
<table border='0' align='left' cellpadding='0' cellspacing='0' class='top-header-left'>
<tr>
<td align='center'>
<table border='0' cellpadding='0' cellspacing='0' class='date'>
<tr>
<td>
<img editable='true' mc:edit='icon1' style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/grank-logo.png' alt='icon 1' />
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border='0' align='right' cellpadding='0' cellspacing='0' class='top-header-right'>
<tr>
<td align='center'>
<table border='0' cellpadding='0' cellspacing='0' align='center' class='tel'>
<tr>
<td>
&nbsp;
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit='tel' style='color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<singleline>
<img editable='true' mc:edit='icon1' style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/google-partner-logo.jpg' alt='icon 1' />
</singleline>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height='10'></td>
</tr>
<tr>
<td width='100%' align='center' valign='top'>
<table border='0' width='600' cellpadding='0' cellspacing='0' align='center' class='container' bgcolor='ffffff'>
<tr>
<td><img style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/top-header-bg.png' alt='' class='header-bg' /></td>
</tr>
<tr bgcolor='2780cb'>
<td height='5'></td>
</tr>
<tr bgcolor='2780cb'>
<td align='center'>
<table border='0' width='560' align='center' cellpadding='0' cellspacing='0' class='container-middle'>
<tr>
<td>
<table border='0' align='left' cellpadding='0' cellspacing='0' class='top-header-left'>
<tr>
<td align='center'>
<table border='0' cellpadding='0' cellspacing='0' class='date'>
<tr>
<td>
<img editable='true' mc:edit='icon1' width='13' style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/icon-cal.png' alt='icon 1' />
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit='date' style='color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<singleline>
".date('d l')."
</singleline>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border='0' align='right' cellpadding='0' cellspacing='0' class='top-header-right'>
<tr>
<td align='center'>
<table border='0' cellpadding='0' cellspacing='0' align='center' class='tel'>
<tr>
<td>
&nbsp;
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit='tel' style='color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<singleline>
".date('F Y')."
</singleline>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr bgcolor='2780cb'>
<td height='10'></td>
</tr>
</table>

<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='container' bgcolor='ffffff'>
<tr bgcolor='ffffff'>
<td height='40'></td>
</tr>

</table>
</td>
</tr>
<tr bgcolor='ffffff'>
<td height='40' style='text-align:center;'> Enquiry For Pranathi Kiara </td>
</tr>
<tr>
<td>
<table border='0' width='560' align='center' cellpadding='0' cellspacing='0' class='container-middle'>
<tr>
<td align='center'><img style='display: block;' width='560' height='auto' src='http://www.mrcreativedemo.com/verified_enquiry//img/top-rounded-bg.png' alt='' class='top-bottom-bg' /></td>
</tr>
<tr bgcolor='ffffff'>
<td height='7'></td>
</tr>
<tr bgcolor='ffffff'>
<td height='20'></td>
</tr>
<tr bgcolor='ffffff'>
<td>
<table width='528' border='0' align='center' cellpadding='0' cellspacing='0' class='mainContent'>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Name : ".$name."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>
<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Email: ".$email."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>
<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Phone: ".$countryCode." ".$phone."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>
<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Intrested Location : ".$location."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>


<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Flat Type : ".$flattype."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Intrested Budget : ".$budget."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>UTM Campaign: ".$utm_campaign."</i>
</multiline>
</td>
</tr>


<tr>
<td height='20'></td>
</tr>


<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>SRD Value: ".$SRD_val."</i>
</multiline>
</td>
</tr>


<tr>
<td height='20'></td>
</tr>


</table>
</td>
</tr>
<tr bgcolor='ffffff'>
<td height='25'></td>
</tr>
<tr>
<td align='center'><img style='display: block;' width='560' height='auto' src='http://www.mrcreativedemo.com/verified_enquiry/img/bottom-rounded-bg.png' alt='' class='top-bottom-bg' /></td>
</tr>
<tr bgcolor='2780cb'>
<td height='14'></td>
</tr>
<tr bgcolor='2780cb'>
<td mc:edit='copy3' align='center' style='color: #eee; font-size: 10px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
Copyright ".date('Y')." . All Rights Reserved
</multiline>
</td>
</tr>
<tr>
<td><img style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/bottom-footer-bg.png' alt='' class='header-bg' /></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height='30'></td>
</tr>
</table>

</body>
</html>";


$name = str_ireplace(' ', '-', $name);
$dropdown = str_ireplace(' ', '-', $dropdown);


$mail = new PHPMailer();		
$mail->From      = 'pranathiconstruc@crystal.herosite.pro';		
$mail->FromName  = "Pranathi Kiara";		
$mail->Subject   = $subject;		
$mail->Body      = $message;		
$mail->SetFrom( "pranathiconstruc@crystal.herosite.pro", 'Pranathi Kiara');



$mail->AddAddress('sales@pranathiconstructions.com', 'Pranathi Kiara');
$mail->AddBCC('kiranyadav@grank.co.in', 'Pranathi Kiara');
$mail->AddBCC('maheshwari@grank.co.in', 'Pranathi Kiara');
$mail->AddBCC('sowmya@grank.co.in', 'Pranathi Kiara'); 
$mail->AddBCC('leadtest@grank.co.in', 'Pranathi Kiara');

// $mail->AddAddress('prashanth@grank.co.in', 'Pranathi Kiara'); 
// $mail->AddAddress('kiranyadav@grank.co.in', 'Pranathi Kiara'); 


$mail->IsHTML(true);

  if($mail->send())
  {
   
    $leaddata = array (
        "sell_do" => array(
            "analytics" => array("utm_content" => '', "utm_term" =>'',"utm_source"=>''),
            "campaign" => array("srd" => $SRD_val),
            "form" => array(
                "requirement" => array("property_type" => "flat"), 
                "custom" => array(
                  "custom_are_you_interested_in_buying_property_in_tellapurr"=>$location,
                  "custom_are_you_interested_in_buying_a_three_bhk_apartment_starting_from_one_twenty_crore"=>$flattype,
                  "custom_select_your_prefered_flat_type_and_preferred_budget"=>$budget
                ),  
                "lead" => array ("name" =>$name, "phone" =>$phone,"email"=>$email)
            )
        ),
        "api_key" =>'2f602e29b1cea4d8323f6e452a2b4a61'
    );
    $ch = curl_init('https://app.sell.do/api/leads/create.json');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($leaddata));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $response = curl_exec($ch);
    curl_close($ch);
    //echo "<pre>";print_r(json_decode($response));echo "</pre>";
    header('Location:https://www.pranathiconstructions.com/best-gated-community-apartments-in-tellapur/thankyou-brochure.php?dwn=1');
  } else {
   echo "Email Not Sent!!. Please try again";
  }

}else
{
echo "Email or Phone Number is empty";
}
?>
