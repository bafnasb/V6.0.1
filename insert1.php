<?php
	$con = mysqli_connect("localhost", "root", "", "bsp_emp");
	if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	$fnn =  mysqli_real_escape_string($con, $_REQUEST['fnn']);
	$send = mysqli_real_escape_string($con, $_REQUEST['send']);
	$recieve = mysqli_real_escape_string($con, $_REQUEST['recieve']);
	$fromst = mysqli_real_escape_string($con, $_REQUEST['fromst']);
	$cf = mysqli_real_escape_string($con, $_REQUEST['code_from']);
	$tost = mysqli_real_escape_string($con, $_REQUEST['tost']);
	$ct = mysqli_real_escape_string($con, $_REQUEST['code_to']);
	
	$sql = "INSERT INTO dispatcher 
			VALUES ('$fnn','$send','$recieve','$fromst','$cf','$tost','$ct')";
	
	if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
	Header('Location:shipping.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
	mysqli_close($con);
?>
