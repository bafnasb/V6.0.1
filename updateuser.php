<?php 
session_start();
if(isset($_SESSION['emp_type']) && isset($_SESSION['role'])){
$us=$_REQUEST['usd'];
echo $us;
$pd=$_REQUEST['pda'];
echo $pd;
$de=$_REQUEST['rl'];
echo $de;
		$con = new mysqli("localhost","root","","bsp_emp");	
		if (mysqli_connect_errno())
		  {
  		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		  }	
		$sql="INSERT INTO login(usn,psw,rl) VALUES ('".$us."',".$pd.",'".$de."')";	
		if(mysqli_query($con,$sql))	
		Header('Location:adminui_bsp.php');
		else
		echo "error";
}else
Header('Location:login.php');
?>
<head>
<style type ="text/css">
body{
background-image:url(bsp.bmp);
background-size:cover;

}
</style>
</head></html>
