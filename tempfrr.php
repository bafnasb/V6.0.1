<?php 
session_start();
if(isset($_SESSION['emp_type']) && isset($_SESSION['role'])){
$_SESSION['fnd']=$_REQUEST['bday'];
Header('Location:gui.php');
}
else
Header('Location:login.php');
?>
