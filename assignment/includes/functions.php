<?php
ob_start();
include_once("includes/config.php");
include_once("includes/constant.php");

class MYSQL
{
	function Chklogin($set_table_name,$username,$password)
	{
        $con=mysqli_connect("localhost","root","","bulkmail") or die(mysqli_connect_error());
		$sel	=	"select * from $set_table_name where username='$username' and password='$password'";
		$res	=	mysqli_query($con,$sel); 
			$result = array();
			while ($record = mysqli_fetch_object($res)) {
				 $result[] = $record;
			}
			return $result; 
	}
	
	function login()
	{
		if($_SESSION['session_email']=="")
		header("location:index.php");
	}	
	
	function Fetch($set_table_name)
	{
        $con=mysqli_connect("localhost","root","","bulkmail") or die(mysqli_connect_error());
		$sel	=	"select * from $set_table_name";
		$res	=	mysqli_query($con,$sel);	
		$result = array();
		while ($record = mysqli_fetch_object($res)) {
			 $result[] = $record;
		}
		return $result;
	}
    function get_recipients($set_table_name)
	{
        $con=mysqli_connect("localhost","root","","bulkmail") or die(mysqli_connect_error());
		$sel	=	"select * from $set_table_name";
		$res	=	mysqli_query($con,$sel);	
		$result = array();
		while ($record = mysqli_fetch_assoc($res)) {
			 $result[] = $record;
		}
		return $result;
	}
    function getPagerData($numHits, $limit, $page) 
	{ 
	   $numHits  = (int) $numHits; 
	   $limit    = max((int) $limit, 1); 
	   $page     = (int) $page;
	   //echo $page; 
	   $numPages = ceil($numHits / $limit); 

	   $page = max($page, 1);
	   $page = min($page, $numPages); 
		
	   $offset = ($page - 1) * $limit; 
		
	   $ret = new stdClass; 

	   $ret->offset   = $offset; 
	   $ret->limit    = $limit; 
	   $ret->numPages = $numPages; 
	   $ret->page     = $page; 
	   return $ret; 
	}
}
?>