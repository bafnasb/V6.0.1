<?php 
session_start();
if(isset($_SESSION['emp_type']) && isset($_SESSION['role'])){
if(!strcmp('bsp',$_SESSION['emp_type']))
	{
		if(!strcmp('admin',$_SESSION['role']))
		{
		include('adminhead_bsp.php');
		include('bsp_admin.php');
		}
		else if(!strcmp('shipping',$_SESSION['role']))
		{
		include('header.php');
		include('bsp_shipping.php');
		}
		else if(!strcmp('fianance',$_SESSION['role']))
		{
		include('header.php');	
		include('bsp_fianance.php');
		}
		else
		Header('Location:login.php');
	}
else if(!strcmp('rail',$_SESSION['emp_type']))
	{
		if(!strcmp('admin',$_SESSION['role']))
		{
		include('adminhead_rail.php');
		include('rail_admin.php');
		}
		else if(!strcmp('emp',$_SESSION['role']))
		{
		include('header.php');
		include('rail_emp.php');
		}
		else 
		Header('Location:login.php');
	}
echo '<br><br><br>';
//include('footer.php');
}
else
Header('Location:login.php');
?>
<html>
<style>
body{
	background-image:url('bg1.png');
	background-size:cover;
}
</style>
</html>
