<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
$url = "https"; 
else
$url = "http"; 
$url .= "://"; 
$url .= $_SERVER['HTTP_HOST'];
$urlsiteweb = $url;
$nomdns = $_SERVER['SERVER_NAME'];
$anneedns = '2015';
$logomenu = 'https://eurowebpage.com/images/logo/20200626160654-111logo23-50.png';
$seotag = 'Seo et référencement naturel';
$lang = 'fr';
$footer['droit'] = 'Tous droit réserver.';
?>
<?php 
?>
<!doctype html>
<html lang="<?=$lang?>">
<head>
<title>Template simple start 1 SEO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Template simple start 1 SEO, modèle de page web simple SEO pour votre stratégie SEO et performance web">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<style>
img{
object-fit: contain;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="navbar-brand js-scroll-trigger">
<a class=" btn btn-sm btn-dark" href="<?php echo $urlsiteweb;?>" title="<?php echo $seotag;?>">  <img src="<?php echo $logomenu;?>" title="logo" alt="logo" class="img-fluid"></a>
</div>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">
<li class="nav-item">  <a class="btn btn-primary btn-lg ml-2" href="<?php echo $urlsiteweb;?>" title="home <?php echo $seotag;?>">HOME</a></li>
</ul>
</div></nav>
<section class="container">
<h2 class="mt-5 font-weight-light mb-3">Template simple start 1 SEO</h2>
<p class="lead">Optimisation WEB SEO</p>
</section>
<section class="container">
<div class=" mt-5 mb-5 mx-auto text-center">
<img src="https://cdn.eurowebpage.com/img/eurowebpage.com/img//think/20200412112744-logo-think-2-noir.png" class="img-fluid" width="300" alt="plugin install"/> </div></section>
<footer class="footer bg-dark py-5 mt-5">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12  text-center my-auto">
<p class="text-white text-center"><?php auto_copyright($anneedns);  // 2015 - Current ?> 
<a href="<?php echo $urlsiteweb;?>" title="<?php echo $seotag;?>"  class="text-white"><?php echo $nomdns;?></a>. <?php echo $footer['droit'];?></p>
<?php 
// No argument required for current year.
// Otherwise, pass start year as a 4-digit value.
function auto_copyright($startYear = null) {
$thisYear = date('Y');  // get this year as 4-digit value
if (!is_numeric($startYear)) {
$year = $thisYear; // use this year as default
} else {
$year = intval($startYear);
}
if ($year == $thisYear || $year > $thisYear) { // $year cannot be greater than this year - if it is then echo only current year
echo "&copy; $thisYear"; // display single year
} else {
echo "&copy; $year&ndash;$thisYear"; // display range of years
}   
 } 
 ?>
</div></div></div></footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" async></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" async></script>    
</body>
</html>
