<?php

	$conn = new mysqli("localhost","root","","bsp_emp");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql='';
	if (isset($_POST['submit'])) {
session_start();
$dt=$_POST['date'];
$fnn=$_POST['fnn'];
$val=$_SESSION['count'];
	for($i=1;$i<=$val;$i++) {
	$own=$_POST['own'.$i];	
	$type=$_POST['type'.$i];
	$wagon=$_POST['wagon'.$i];
	$cc=$_POST['cc'.$i];
	$tare=$_POST['tare'.$i];
	$art=$_POST['art'.$i];
	$com=$_POST['com'.$i];
	$gross=$_POST['gross'.$i];
	$dms1=$_POST['dms1'.$i];
	$dms2=$_POST['dms2'.$i];
	$act=$_POST['act'.$i];
	$perm=$_POST['perm'.$i];
	$owc1=$_POST['owc1'.$i];
	$owc2=$_POST['owc2'.$i];
	$owc3=$_POST['owc3'.$i];
	$chrg=$_POST['chrg'.$i];
	
	$sql .= "INSERT INTO dispatch 
	VALUES 
('$dt','$fnn','$i+1','$own','$type','$wagon','$cc','$tare','$art','$com','$gross','$dms1','$dms2','$act','$perm','$owc1','$owc2','$owc3','$chrg');";
	
	}
	if ($conn->multi_query($sql) === TRUE) {
   $_SESSION['ins']="jjhjkhjk";	
	header('Location:shipping.php');
	} 
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>
