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
		<tr bgcolor=#99CC00><td>DATE</td>
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
		<table border='0px' height='100%'><th colspan='2'>PUNITIVE CHARGE FOR OVERLOADING</th>
		<tr><td>CLASS</td>
		<td>RATE</td></tr>
		</table></td>
		</tr>";}
		else {
		echo "<h4 align='center'>Forwarding Note Number Not Found in Record,Try another</h4>";
		}
	 	//while($row1 = $result->fetch_assoc()){
		echo "<tr>
		<td>".$row1['Date']."</td>		
		<td>".$row1['Forwarding_Note_no']."</td>
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
		<table border='0px' height='100%' width='100%'>
		<tr><td>".$row1['PC_Class']."</td>
		<td>".$row1['PC_Rate']."</td></tr>
		</table></td>
		</tr>";
//}
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
		<td><table border='0px' height='100%' width='100%'>
		<tr><td>o</td>
		<td>p</td></tr>
		</table></td>
		</tr></table>";*/
echo "<br><br>";
/*FOR SHIPPING INFO */
		$con = new mysqli("localhost","root","","bsp_emp");
		if (mysqli_connect_errno())
		  {
  		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		  }	
		$result=$con->query("SELECT * FROM dispatcher where Forwarding_Note_no = '".$_SESSION['fnd']."'");
		if($row2 = $result->fetch_assoc()){		
		echo "
		<table border='1px' height='30%' width='100%'>
		<th colspan='13'>SHIPPING INFORMATION</th>
		<tr bgcolor=#99CC00>	
		<td>FORWARDING NOTE NUMBER<td>
		<td>SENDER'S NAME AND ADDRESS</td>
		<td>CONSIGNEE'S NAME AND ADDRESS</td>
		<td>FROM SLIDING/STATION</td>
		<td>TO SLIDING/STATION</td>
		<td>CODE(FROM)</td>
		<td>CODE(TO)</td>
		</tr>";}
//		while($row2 = $result->fetch_assoc()){
		echo "<tr>
		<td>".$row2['Forwarding_Note_no']."<td>
		<td>".$row2['Senders_Name_and_Address']."</td>
		<td>".$row2['Consignee_Name_and_Address']."</td>
		<td>".$row2['From_Siding_Station']."</td>
		<td>".$row2['To_Siding_Station']."</td>
		<td>".$row2['Code_F']."</td>
		<td>".$row2['Code_T']."</td>
		</tr>";
//}
		echo "</table>";
		/*echo "<tr>
		<td>a<td>
		<td>b</td>
		<td>c</td>
		<td>d</td>
		<td>e</td>
		<td>f</td>
		<td>g</td>
		<td>h</td>
		</tr></table>";*/
echo "<br><br>";
/*FOR WAGON DEATILS*/
		$con = new mysqli("localhost","root","","bsp_emp");
		if (mysqli_connect_errno())
		  {
  		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		  }
		$result=$con->query("SELECT * FROM dispatch where Forwarding_Note_no = '".$_SESSION['fnd']."'");
		if($row3 = $result->fetch_assoc()){	
		echo "<table border='1px' height='30%' width='100%'>
		<th colspan='17'>WAGON DETAILS</th>
		<tr bgcolor=#99CC00>
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
		</tr>";}
//		while($row3 = $result->fetch_assoc()){
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
//}
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
		<td><table border='0px' height='100%' width='100%'>
		<tr><td>j</td>
		<td>k</td></tr>
		</table>
		</td>
		<td>l</td>
		<td>m</td>
		<td>
		<table border='0px' height='100%' width='100%'>
		<tr><td>n</td>
		<td>o</td>
		<td>p</td></tr>
		</table>
		</td>
		<td>q</td>	
		</tr></table>";*/
}
}
else
Header("Location:login.php")
?>
