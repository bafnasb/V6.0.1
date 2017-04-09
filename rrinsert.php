<?php
$con = new mysqli("localhost","root","","rail_emp");
	if (!$con) 
	{
    die("Connection failed: " . mysqli_connect_error());
	}
	$fnn =  mysqli_real_escape_string($con, $_REQUEST['fnn']);
	$in = mysqli_real_escape_string($con, $_REQUEST['in']);
	$rrno = mysqli_real_escape_string($con, $_REQUEST['rrno']);
	$date = mysqli_real_escape_string($con, $_REQUEST['date']);
	$trfc = mysqli_real_escape_string($con, $_REQUEST['trfc']);
	$now = mysqli_real_escape_string($con, $_REQUEST['now']);
	$risk = mysqli_real_escape_string($con, $_REQUEST['risk']);
	$cr =  mysqli_real_escape_string($con, $_REQUEST['cr']);
	$hlb = mysqli_real_escape_string($con, $_REQUEST['hlb']);
	$rt = mysqli_real_escape_string($con, $_REQUEST['rt']);
	$cla = mysqli_real_escape_string($con, $_REQUEST['cla']);
	$tcw = mysqli_real_escape_string($con, $_REQUEST['tcw']);
	$wu = mysqli_real_escape_string($con, $_REQUEST['wu']);
	$rate = mysqli_real_escape_string($con, $_REQUEST['rate']);
	$pcc =  mysqli_real_escape_string($con, $_REQUEST['pcc']);
	$pcr = mysqli_real_escape_string($con, $_REQUEST['pcr']);
	
$sql = "INSERT INTO rr_info 
			VALUES ('$fnn','$in','$rrno','$date','$trfc','$now','$risk','$cr','$hlb','$rt','$cla','$tcw','$wu','$rate','$pcc','$pcr')";
	
	if ($conn->multi_query($sql) === TRUE) {
   $_SESSION['ins']="temp";	
	header('Location:rrinfo.php');
	} 
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
$conn->close();
?>