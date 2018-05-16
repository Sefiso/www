<?php 
include_once("includes/functions.php");
$connect			=	new MYSQL();
$exec			= 	$connect->Fetch(SETTINGS);
//print_r($exec);
foreach($exec as $res)
{
$id			=	$res->id;
$name		=	$res->company;
$Siteurl	=	$res->siteurl;
$logo		=	$res->logo;
$telephone	=	$res->telephone;
}
define("WEBSITE_URL",$Siteurl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Client survey helps you get in touch with your customers">
	<title>Welcome</title>
    <link rel="shortcut icon" type="image/x-icon" href="uploads/logo/favicon.ico.png" />	
	<link href="<?php echo WEBSITE_URL;?>css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo WEBSITE_URL;?>css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>assets/css/style-inner.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>assets/css/star-rating.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>assets/themes/rating-fa/theme.css" media="all" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>assets/themes/rating-svg/theme.css" media="all" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>assets/themes/rating-uni/theme.css" media="all" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>assets/css/star-rating.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>css/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic,700italic|Lustria" rel="stylesheet" type="text/css" />
    <link href="<?php echo WEBSITE_URL;?>css/plugins/morris.css" rel="stylesheet">
    <script src="<?php echo WEBSITE_URL;?>js/jquery-2.0.3.min.js" type="text/javascript"></script>	
    <script src="<?php echo WEBSITE_URL;?>js/bootstrap.js" type="text/javascript"></script>	
    <script src="<?php echo WEBSITE_URL;?>js/custom.js" type="text/javascript"></script>
    <script src="<?php echo WEBSITE_URL;?>js/popup.js" type="text/javascript"></script>
    <script src="<?php echo WEBSITE_URL;?>js/star-rating.js" type="text/javascript"></script>
    <script src="<?php echo WEBSITE_URL;?>assets/themes/rating-fa/theme.js" type="text/javascript"></script>
    <script src="<?php echo WEBSITE_URL;?>assets/themes/rating-svg/theme.js" type="text/javascript"></script>
    <script src="<?php echo WEBSITE_URL;?>assets/themes/rating-uni/theme.js" type="text/javascript"></script>
<style>
    #background{
    position:absolute;
    display:block;
    min-height:5%; 
    min-width:5%;
    color:yellow;
}
    
#bg-text
{
    color:lightgrey;
    font-size:20px;
}
</style>    
</head>



<!-- header starts here -->

<body>
<header>

<div class="head">
<div class="container">
<div class="col-md-12">
<div class="logo clearfix">
<a href="<?php echo WEBSITE_URL; ?>" ><img src="<?php echo $logo;?>" align= middle class="img-responsive center" alt="logo" style="margin: 5px"></a>
</div>
</div>
</div>
</div>

</header>
<!-- header ends here -->