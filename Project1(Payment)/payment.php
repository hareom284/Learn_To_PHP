<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","smlearning");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySql:".mysqli_connect_error();
}
?>
<?php
if(isset($_POST['ok']))
{
	$roll=$_POST['roll'];
	$name=$_POST['name'];
	$dop=$_POST['dop'];
	$fees=$_POST['fees'];
	$nmonth=$_POST['nmonth'];
	$tamount=$_POST['tamount'];
	$month=$_POST['month'];

	//insert query

	$insert="INSERT INTO `table_1`(`roll`,`name`,`dop`,`fees`,`nmonth`,`tamount`,`month`) VALUES('$roll','$name','$dop','$fees','$nmonth','$tamount','$month')";
	$query=mysqli_query($con,$insert) or die(mysqli_error($con));
	if($query==1)
	{
		$ins="INSERT INTO `table_2`(`roll`,`name`,`nmonth`,`tamount`) VALUES('$roll','$name','$nmonth','$tamount')";
		$quy=mysqli_query($con,$ins) or die(mysqli_error($con));
		if($quy==1)
		{
			echo "Payment done:";
		}
	}
	else
	{
		echo "Payment no done:";
	}
}



?>