<!DOCTYPE html>
<html lang="en">
<head>
<title>THANKYOU | PRANATHI KAIRA </title>

<?php include 'includes/toplinks.php' ?>
<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-HBNZR88WEL"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-HBNZR88WEL'); </script>

</head>

<body>

<?php include 'includes/header-thankyou.php' ?>

<?php
// $dwn=$_GET['dwn'];
// if($dwn==true)
// {
?>
<iframe src="filedownload.php" style="display:none;"></iframe>
<?php
// }
?>



<section class="mb-5">
<div class="container thankyou-margin-top">
<div class="row mt-5">
<div class="col-12 col-md-6">
<img class="w-100" src="images/thank-you.jpg">
</div>
<div class="col-12 col-md-6 text-center d-flex flex-column justify-content-center">
<div class="my-auto">
<h1>Thank you</h1>
<p>Thank you for reaching out to us! We appreciate your interest. Our sales team will be in touch with you shortly to discuss your inquiry in detail and provide the necessary assistance.</p>

<p class="mb-2">If Brochure not downloaded <a href="Pranathis-Kiara-Brochure.pdf" download="Pranathis-Kiara-Brochure.pdf" id="link" class="text-warning">click here</a></p>

<a href="index.php"><button class="btn btn-outline-warning p-3">HOME</button></a>
 <?php
$dwn=$_GET['dwn'];
if($dwn==1)
{
    ?>
    <iframe src="filedwnld.php" style="display:none;"></iframe>
     <?php
    
    
}
?>
    
</div>
</div>
</div>
</div>
</section>


<?php include 'includes/footer.php' ?>

<?php include 'includes/bottom-links.php' ?>



</body>

</html>