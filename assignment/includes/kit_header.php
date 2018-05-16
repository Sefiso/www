<?php include_once("includes/functions.php");
$connect			=	new SQL();
//if((isset($session_usertype))&&(!empty($session_username)))
//{
$session_usertype	=	(isset($_SESSION['session_usertype'])? $_SESSION['session_usertype'] : null);
$session_username	=	(isset($_SESSION['session_username'])? $_SESSION['session_username'] : null);
//}
$exec			= 	$connect->Fetch(SETTINGS);
foreach($exec as $res)
{
$Company			=	$res['Company'];
$Logo			=	$res['Logo'];
$ContactPerson	=	$res['ContactPerson'];
$Address			=	$res['Address'];
$City			=	$res['City'];
$State			=	$res['State'];
$Country			=	$res['Country'];
$Telephone		=	$res['Telephone'];
$Siteurl			=	$res['Siteurl'];
}
define("WEBSITE_URL",$Siteurl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inteliweb is an online ordering system for corporate canteens">
	<title>Welcome</title>
    <link rel="shortcut icon" type="image/x-icon" href="uploads/logo/favicon.ico.png" />	
	<link href="<?php echo WEBSITE_URL;?>css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo WEBSITE_URL;?>css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>assets/css/style-inner.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>css/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEBSITE_URL;?>font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic,700italic|Lustria" rel="stylesheet" type="text/css" />	
    <script src="<?php echo WEBSITE_URL;?>js/jquery-2.0.3.min.js" type="text/javascript"></script>	
    <script src="<?php echo WEBSITE_URL;?>js/bootstrap.js" type="text/javascript"></script>	
    <script src="<?php echo WEBSITE_URL;?>js/custom.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="css/datepicker.css" />    
</head>



<!-- header starts here -->

<body>
<div class="container">
<?php if($session_usertype=='') { ?>
<div class="col-md-12">

<div class="logo clearfix">

<a href="<?php echo WEBSITE_URL; ?>" ><img src="<?php echo WEBSITE_URL;?><?php echo $Logo; ?>" class="img-responsive" alt="logo"></a>

</div>

</div>

<?php } if($session_usertype!='') { ?>
		
<div class="col-md-2" style="width: 190px">

<?php if(!empty($session_usertype)&&($session_usertype=='2')){ ?>
<a href="<?php echo WEBSITE_URL; ?>manage_kitchen_orders.php" > <img src="<?php echo $Logo; ?>" class="img-responsive" alt="logo"></a>
<?php } ?>

</div>
<ul class="list-unstyled pull-right mar-top">

<li class="light-blue">

<a class="" href="logout.php">

<i class="fa fa-power-off" style="font-size: 20px"></i></a>

</li>
 </ul>
<?php } ?>
    </div>
<!-- header ends here -->