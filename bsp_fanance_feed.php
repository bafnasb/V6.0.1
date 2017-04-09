<?php
if(isset($_SESSION['emp_type']) && isset($_SESSION['role']))
{
$dt=$_SESSION['dt'];
echo "
<table align='center'><form action='temp.php' method='post'>
<th align='center'>Enter the Forwarding Note Number to View it's Details</th>
<tr><td align='center'><input type='text' name='bday' size='10' required></td></tr>
<tr><td align='center'><input type='submit' value='Submit'></td></tr></form></table>";
if(strcmp(($_SESSION['fnd']),null)){
/*For RAILWAY RECEIPT INFORMATION */
		$con = new mysqli("localhost","root","","rail_emp");
		if (mysqli_connect_errno())
		  {
  		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		  }	
		$result=$con->query("SELECT * FROM rr_info where Forwarding_Note_No = '".$_SESSION['fnd']."'");	
		if($row1 = $result->fetch_assoc()){	
		echo "<table border='1px' height='30%' width='100%'>
		<th colspan='15'>RAILWAY RECEIPT INFORMATION</th>
		<tr><td>DATE</td>
		<td>FORWARDING NOTE NUMBER</td>
		<td>INVOICE NUMBER</td>
		<td>RAILWAY RECEIPT NUMBER</td>
		<td>TRFC TYPE</td>
		<td>NUMBER OF WAGON IN FOUR WHEELER</td>
		<td>RISK RATE</td>
		<td>CHARGABLE DISTANCE</td>
		<td>HANDLED BY</td>
		<td>RATE TYPE</td>
		<td>CLASS</td>
		<td>TOTAL CHARGABLE WEIGHT</td>
		<td>WEIGHT UNIT</td>
		<td>RATE</td>
		<td>
		<table border='.1px' height='100%'><th colspan='2'>PUNITIVE CHARGE FOR OVERLOADING</th>
		<tr><td>CLASS</td>
		<td>RATE</td></tr>
		</table></td>
		</tr>";}
		else {
		echo "<h4 align='center'>Forwarding Note Number Not Found in Record,Try another</h4>";
		}
	 	while($row1 = $result->fetch_assoc()){
		echo "<tr>
		<td>".$row1['Date']."</td>		
		<td>".$row1['Forwarding_Note_No']."</td>
		<td>".$row1['INVOICE_NO.']."</td>
		<td>".$row1['RR_NO.']."</td>
		<td>".$row1['TRFC_TYPE']."</td>
		<td>".$row1['No_wagon_in_fw']."</td>
		<td>".$row1['Risk_Rate']."</td>
		<td>".$row1['CHRG_Dist']."</td>
		<td>".$row1['Hand_Led_By']."</td>
		<td>".$row1['Rate_Type']."</td>
		<td>".$row1['Class']."</td>
		<td>".$row1['Total_Chargeable_Weight']."</td>
		<td>".$row1['Weight_Unit']."</td>
		<td>".$row1['Rate']."</td>
		<td>
		<table border='.2px' height='100%' width='100%'>
		<tr><td>".$row1['PC_Class']."</td>
		<td>".$row1['PC_Rate']."</td></tr>
		</table></td>
		</tr>";}
		echo "</table>";
		/*echo "<tr>
		<td>a</td>
		<td>b</td>
		<td>c</td>
		<td>d</td>
		<td>e</td>
		<td>f</td>
		<td>g</td>
		<td>h</td>
		<td>i</td>
		<td>j</td>
		<td>k</td>
		<td>l</td>
		<td>m</td>
		<td>n</td>
		<td><table border='.1px' height='100%' width='100%'>
		<tr><td>o</td>
		<td>p</td></tr>
		</table></td>
		</tr></table>";*/
echo "<br><br>";
}
else
Header("Location:login.php")
?>
