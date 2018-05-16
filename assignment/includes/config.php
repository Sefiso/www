<?php	
class config
{

	function dbconnect()
	{
		ob_start();
        $con=mysqli_connect("localhost","root","","bulkmail") or die(mysqli_connect_error());
	}
	function dbquery($qry)
	{
		$res		=	mysqli_query($qry) or die(mysqli_connect_error());
		return $res;
	}
	function fetchArray($res)
	{
		$row		=	mysqli_fetch_array($res);
		return $row;
	}	
	//Redirecting location
	public function redirectLocation($location)
	{	
		?>
		<script type="text/javascript" language="javascript">
		window.location="<?php echo $location;?>";
		</script>
		<?php
	}
	function fetchAssoc($res)
	{
		$row		=	mysqli_fetch_assoc($res);
		return $row;
	}
	function fetchObject($res)
	{
		$row		=	mysqli_fetch_object($res);
		return $row;
	}
	function fetchRow($res)
	{
		$row		=	mysqli_fetch_row($res);
		return $row;
	}
	function fetchNum($res)
	{
		$row		=	mysqli_num_rows($res);
		return $row;
	}
}	
if(empty($_SESSION))
{
	session_start();
}
else
{
	//print_r($_SESSION);
}
function redirect($filename)
{
	echo '<script>window.location="'.$filename.'";
	</script>';
}

?>