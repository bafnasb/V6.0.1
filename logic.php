<?php
session_start();
$usn=$_REQUEST['us'];
$psw=$_REQUEST['pd'];
$_SESSION['i']=0;
$_SESSION['fnd']='';
echo $usn;
echo $psw;
if(!strpos($usn,null)){
header('Location:login.php');
}
if(strpos($usn,'@bsp'))
		{
		$con = new mysqli("localhost","root","","bsp_emp");
		if (mysqli_connect_errno())
		  {
  		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		  }	
		$result=$con->query("SELECT psw FROM login where usn ='$usn'");
		$row = $result->fetch_assoc();	
		if(!strcmp($psw,$row['psw']))
		{
			$_SESSION['emp_type']='bsp';
			$rs=$con->query("SELECT rl FROM login where usn ='$usn'");
		        $rw = $rs->fetch_assoc();	
			$_SESSION['role']=$rw['rl'];		  	
			$con->close();
			header('Location:ui.php');
		}
		else 
		{
			$con->close();
			header('Location:login.php');
		} 
		}	
else if(strpos($usn,'@rail'))
		{
		$con = new mysqli("localhost","root","","rail_emp");			
		if (mysqli_connect_errno())
		  {
  		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		  }				
		$result=$con->query("SELECT psw FROM login where usn ='$usn'");
		$row = $result->fetch_assoc();	
		if(!strcmp($psw,$row['psw']))
		{
			$_SESSION['emp_type']='rail';
			$rol=$con->query("SELECT rl FROM login where usn = '$usn'");
			$rd = $rol->fetch_assoc();			
			$_SESSION['role']=$rd['rl'];
			$con->close();
			header('Location: ui.php');
		}
		else 	
			{
			$con->close();			
			header('Location: login.php');
			} 
		}
?>
