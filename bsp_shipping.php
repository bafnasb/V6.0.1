<?php
if(isset($_SESSION['emp_type']) && isset($_SESSION['role']))
	{
	 echo "Shipping@BSP";	
	 Header('Location:shipping.php');
	}
else
Header("Location:login.php")
?>
