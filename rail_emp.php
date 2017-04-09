<?php
if(isset($_SESSION['emp_type']) && isset($_SESSION['role']))
	{
	 header('Location:rrinfo.php');
	}
else
Header("Location:login.php")
?>
