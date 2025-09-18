<!--?php
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
if($_POST['fullurl']!=NULL){ $fullurl=$_POST['fullurl']; }


if($email && $phone)
{
 
date_default_timezone_set("Asia/Kolkata");

$subject = 'Enquiry for Pranathi Kiara';

$message = "<!DOCTYPE HTML--><html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Email Template</title>
<style type="text/css">
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

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tbody><tr>
<td height="20"></td>
</tr>
<tr>
<td>
<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
<tbody><tr>
<td>
<table border="0" align="left" cellpadding="0" cellspacing="0" class="top-header-left">
<tbody><tr>
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" class="date">
<tbody><tr>
<td>
<picture><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/320w/grank-logo_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/640w/grank-logo_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1024w/grank-logo_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1920w/grank-logo_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img editable="true" mc:edit="icon1" style="display: block;" src="http://www.mrcreativedemo.com/verified_enquiry/img/grank-logo.webp" alt="icon 1"></picture>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table border="0" align="right" cellpadding="0" cellspacing="0" class="top-header-right">
<tbody><tr>
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" align="center" class="tel">
<tbody><tr>
<td>
&nbsp;
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit="tel" style="color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<singleline>
<picture><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/320w/google-partner-logo_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/640w/google-partner-logo_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1024w/google-partner-logo_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1920w/google-partner-logo_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img editable="true" mc:edit="icon1" style="display: block;" src="http://www.mrcreativedemo.com/verified_enquiry/img/google-partner-logo.webp" alt="icon 1"></picture>
</singleline>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="10"></td>
</tr>
<tr>
<td width="100%" align="center" valign="top">
<table border="0" width="600" cellpadding="0" cellspacing="0" align="center" class="container" bgcolor="ffffff">
<tbody><tr>
<td><picture><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/320w/top-header-bg_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/640w/top-header-bg_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1024w/top-header-bg_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1920w/top-header-bg_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img style="display: block;" src="http://www.mrcreativedemo.com/verified_enquiry/img/top-header-bg.webp" alt="" class="header-bg"></picture></td>
</tr>
<tr bgcolor="2780cb">
<td height="5"></td>
</tr>
<tr bgcolor="2780cb">
<td align="center">
<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
<tbody><tr>
<td>
<table border="0" align="left" cellpadding="0" cellspacing="0" class="top-header-left">
<tbody><tr>
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" class="date">
<tbody><tr>
<td>
<picture><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/320w/icon-cal_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/640w/icon-cal_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1024w/icon-cal_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1920w/icon-cal_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img editable="true" mc:edit="icon1" width="13" style="display: block;" src="http://www.mrcreativedemo.com/verified_enquiry/img/icon-cal.webp" alt="icon 1"></picture>
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit="date" style="color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<singleline>
".date('d l')."
</singleline>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table border="0" align="right" cellpadding="0" cellspacing="0" class="top-header-right">
<tbody><tr>
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" align="center" class="tel">
<tbody><tr>
<td>
&nbsp;
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit="tel" style="color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<singleline>
".date('F Y')."
</singleline>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr bgcolor="2780cb">
<td height="10"></td>
</tr>
</tbody></table>

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="container" bgcolor="ffffff">
<tbody><tr bgcolor="ffffff">
<td height="40"></td>
</tr>

</tbody></table>
</td>
</tr>
<tr bgcolor="ffffff">
<td height="40" style="text-align:center;"> Enquiry For Pranathi Kiara </td>
</tr>
<tr>
<td>
<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
<tbody><tr>
<td align="center"><picture><source srcset="http://www.mrcreativedemo.com/verified_enquiry//img/320w/top-rounded-bg_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry//img/640w/top-rounded-bg_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry//img/1024w/top-rounded-bg_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry//img/1920w/top-rounded-bg_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img style="display: block;" width="560" height="auto" src="http://www.mrcreativedemo.com/verified_enquiry//img/top-rounded-bg.webp" alt="" class="top-bottom-bg"></picture></td>
</tr>
<tr bgcolor="ffffff">
<td height="7"></td>
</tr>
<tr bgcolor="ffffff">
<td height="20"></td>
</tr>
<tr bgcolor="ffffff">
<td>
<table width="528" border="0" align="center" cellpadding="0" cellspacing="0" class="mainContent">

<tbody><tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>Name : ".$name."</i>
</multiline>
</td>
</tr>

<tr>
<td height="20"></td>
</tr>
<tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>Email: ".$email."</i>
</multiline>
</td>
</tr>

<tr>
<td height="20"></td>
</tr>
<tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>Phone: ".$countryCode." ".$phone."</i>
</multiline>
</td>
</tr>

<tr>
<td height="20"></td>
</tr>
<tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>Intrested Location : ".$location."</i>
</multiline>
</td>
</tr>

<tr>
<td height="20"></td>
</tr>


<tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>Flat Type : ".$flattype."</i>
</multiline>
</td>
</tr>

<tr>
<td height="20"></td>
</tr>

<tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>Intrested Budget : ".$budget."</i>
</multiline>
</td>
</tr>

<tr>
<td height="20"></td>
</tr>

<tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>UTM Campaign: ".$utm_campaign."</i>
</multiline>
</td>
</tr>


<tr>
<td height="20"></td>
</tr>


<tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>SRD Value: ".$SRD_val."</i>
</multiline>
</td>
</tr>


<tr>
<td height="20"></td>
</tr>
<tr>
<td mc:edit="subtitle1" class="main-subheader" style="color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
<i>Full Url: ".$fullurl."</i>
</multiline>
</td>
</tr>


<tr>
<td height="20"></td>
</tr>


</tbody></table>
</td>
</tr>
<tr bgcolor="ffffff">
<td height="25"></td>
</tr>
<tr>
<td align="center"><picture><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/320w/bottom-rounded-bg_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/640w/bottom-rounded-bg_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1024w/bottom-rounded-bg_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1920w/bottom-rounded-bg_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img style="display: block;" width="560" height="auto" src="http://www.mrcreativedemo.com/verified_enquiry/img/bottom-rounded-bg.webp" alt="" class="top-bottom-bg"></picture></td>
</tr>
<tr bgcolor="2780cb">
<td height="14"></td>
</tr>
<tr bgcolor="2780cb">
<td mc:edit="copy3" align="center" style="color: #eee; font-size: 10px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
<multiline>
Copyright ".date('Y')." . All Rights Reserved
</multiline>
</td>
</tr>
<tr>
<td><picture><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/320w/bottom-footer-bg_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/640w/bottom-footer-bg_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1024w/bottom-footer-bg_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="http://www.mrcreativedemo.com/verified_enquiry/img/1920w/bottom-footer-bg_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img style="display: block;" src="http://www.mrcreativedemo.com/verified_enquiry/img/bottom-footer-bg.webp" alt="" class="header-bg"></picture></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>








";


$name = str_ireplace(' ', '-', $name);
$dropdown = str_ireplace(' ', '-', $dropdown);


$mail = new PHPMailer();		
$mail-&gt;From      = 'pranathiconstruc@crystal.herosite.pro';		
$mail-&gt;FromName  = "Pranathi Kiara";		
$mail-&gt;Subject   = $subject;		
$mail-&gt;Body      = $message;		
$mail-&gt;SetFrom( "pranathiconstruc@crystal.herosite.pro", 'Pranathi Kiara');

$mail-&gt;AddAddress('sales@pranathiconstructions.com', 'Pranathi Kiara');
$mail-&gt;AddBCC('kiranyadav@grank.co.in', 'Pranathi Kiara');
$mail-&gt;AddBCC('maheshwari@grank.co.in', 'Pranathi Kiara');
$mail-&gt;AddBCC('sowmya@grank.co.in', 'Pranathi Kiara'); 
$mail-&gt;AddBCC('leadtest@grank.co.in', 'Pranathi Kiara');

// $mail-&gt;AddAddress('prashanth@grank.co.in', 'Pranathi Kiara'); 
// $mail-&gt;AddAddress('kiranyadav@grank.co.in', 'Pranathi Kiara'); 


$mail-&gt;IsHTML(true);

  if($mail-&gt;send())
  {
   
    $leaddata = array (
        "sell_do" =&gt; array(
            "analytics" =&gt; array("utm_content" =&gt; '', "utm_term" =&gt;'',"utm_source"=&gt;''),
            "campaign" =&gt; array("srd" =&gt; $SRD_val),
            "form" =&gt; array(
                "requirement" =&gt; array("property_type" =&gt; "flat"), 
                "custom" =&gt; array(
                  "custom_are_you_interested_in_buying_property_in_tellapurr"=&gt;$location,
                  "custom_are_you_interested_in_buying_a_three_bhk_apartment_starting_from_one_twenty_crore"=&gt;$flattype,
                  "custom_select_your_prefered_flat_type_and_preferred_budget"=&gt;$budget
                ),  
                "lead" =&gt; array ("name" =&gt;$name, "phone" =&gt;$phone,"email"=&gt;$email)
            )
        ),
        "api_key" =&gt;'2f602e29b1cea4d8323f6e452a2b4a61'
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
    header('Location:https://www.pranathiconstructions.com/best-gated-community-apartments-in-tellapur/thankyou.php');
  } else {
   echo "Email Not Sent!!. Please try again";
  }

}else
{
echo "Email or Phone Number is empty";
}
?&gt;
</body></html>