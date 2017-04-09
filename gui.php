<?php 
session_start();
if(isset($_SESSION['emp_type']) && isset($_SESSION['role']))
	{
		if(strcmp(($_SESSION['fnd']),null))
			{
			include("header.html");
			$con = new mysqli("localhost","root","","bsp_emp");
			echo "<br><h1 align='center'>Details regarding Entered Forwarding Note Number :</h1></br>";		
			if (mysqli_connect_errno())
		  	{
  		   	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		  	}
			$result=$con->query("SELECT * FROM dispatch where Forwarding_Note_no = '".$_SESSION['fnd']."'");
			if($row3 = $result->fetch_assoc())
			{	
			echo "<table border='.1px' height='30%' width='100%'>
			<th colspan='17'>WAGON DETAILS</th>
			<tr>
			<td>Date</td>
			<td>S.No.</td>
			<td>F.Note No.</td>
			<td>OWN RAILWAY</td>
			<td>TYPE</td>
			<td>WAGON No.</td>
			<td>CC TON.</td>
			<td>TARE</td>
			<td>No. OF ARTICLES</td>
			<td>COMMO. CODE</td>
			<td>GROSS WEIGHT</td>
			<td><table border='.1px' height='100%'>
			<th colspan='2'>DIP/MEASUREMENT</th>
			<tr><td>DMS/LTS</td>
			<td>WEIGHT</td></tr>
			</table>
			</td>
			<td>ACTUAL WEIGHT</td>
			<td>PERM CC TONNES</td>
			<td>
			<table border='.1px' height='100%'>
			<th colspan='3'>OVERWEIGHT CHARGABLE AT</th>
			<tr><td>TOTAL</td>
			<td>NORMAL RATE</td>
			<td>PUNITIVE RATE</td></tr>
			</table>
			</td>
			<td>CHARGABLE WEIGHT</td>	
			</tr>";
			}
			while($row3 = $result->fetch_assoc())
			{
			echo "<tr>
			<td>".$row3['Date']."</td>		
			<td>".$row3['SN']."</td>
			<td>".$row3['Forwarding_Note_no']."</td>		
			<td>".$row3['Own_RLY.']."</td>
			<td>".$row3['type']."</td>
			<td>".$row3['Wagon_No.']."</td>
			<td>".$row3['CC_Tones']."</td>
			<td>".$row3['Tare']."</td>
			<td>".$row3['No_of_Articles']."</td>
			<td>".$row3['Commodity_Code']."</td>
			<td>".$row3['Gross_Weight']."</td>
			<td><table border='.2px' height='100%' width='100%'>
			<tr><td>".$row3['Dipm_dmlt']."</td>
			<td>".$row3['Dipm_weight']."</td></tr>
			</table>
			</td>
			<td>".$row3['Actual_Weight']."</td>
			<td>".$row3['Perm_CC_Tonnes']."</td>
			<td>
			<table border='.2px' height='100%' width='100%'>
			<tr><td>".$row3['OWC_total']."</td>
			<td>".$row3['OWC_norm_rate']."</td>
			<td>".$row3['OWC_pun_rate']."</td></tr>
			</table>
			</td>
			<td>".$row3['Chargable_Weight']."</td>	
			</tr>";
			}
			echo "</table>";
			/*echo "<td>a</td>
			<td>b</td>
			<td>c</td>
			<td>d</td>		
			<td>e</td>
			<td>f</td>
			<td>g</td>
			<td>h</td>
			<td>i</td>
			<td><table border='.1px' height='100%' width='100%'>
			<tr><td>j</td>
			<td>k</td></tr>
			</table>
			</td>
			<td>l</td>
			<td>m</td>
			<td>
			<table border='.1px' height='100%' width='100%'>
			<tr><td>n</td>
			<td>o</td>
			<td>p</td></tr>
			</table>
			</td>
			<td>q</td>	
			</tr></table>";*/
			}
		else
			Header('Location:ui.php');
	}
		else
			Header('Location:login.php');
?>
<html>
<style type ="text/css">
body{
background-image:url(bsp.bmp);
background-size:cover;

}
</style>
</style></html>
