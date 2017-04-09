<html>
<body>
<?PHP
session_start();
$dt = $_REQUEST['date'];
$rows = $_REQUEST['rows'];
$submit = $_REQUEST['submit'];
$_SESSION['count']=$rows;
	if (isset($_POST['submit']))
	{
	$rows = $_POST['rows'];
    echo "<h3>Enter the details of the Loaded Wagon</h3>";
	echo '<form action="insert.php" method="POST">';
?>
<table>
<tr><td>Date:<input type="text" name="date" value="<?=$dt?>" size="7" readonly></td><td></td><td></td><td>Forwarding Note No.:<input type="numbers" pattern="[0-9].{0,11}" title="11 or less integers only"name="fnn" size="7"></td></tr></table>
	<table border="0px">
    <tr bgcolor=#CCCC66>
		<td>SI_No.</td>
		<td>OWN Rly.</td>
		<td>Type</td>
		<td>Wagon No.</td>
		<td>CC Tones</td>
		<td>Tare_</td>
		<td>No.of Articles</td>
		<td>Commmidity Code</td>
		<td>Gross Weight</td>
		<td><table border="0px">
		<tr>
			<td colspan="2">Dip Measurment_.</td>
		</tr>
		<tr>
			<td width="150%">D.Ms./Lts</td>
			<td width="150%">Weight.</td>
		</tr>
		</table></td>
		<td>Actual Weight</td>
		<td>Permissible CC Tonnes</td>
		<td><table border="0px">
			<th colspan="3">Over Weight Chargable</th>
		<tr>
			<td width="150%">Total_.</td>
			<td width="150%">Norm.Rate.</td>
			<td width="150%">Pun.Rate.</td>
		</tr>
		</table></td>
		<td>Chargable Weight</td>
	</tr>
<?php	
	for ($i=0; $i<$rows; $i++)
{?>
	
		<td><?=$i+1 ?></td>
		<td><input type="text" pattern="[A-Za-z].{0,5}" title="5 or less characters only"name="own<?=$i+1 ?>" size="3.2"></td>
		<td><input type="text" pattern="[A-Za-z0-9].{0,10}" title="10 or less characters"name="type<?=$i+1 ?>" size="10"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}" title="11 or less integers only"name="wagon<?=$i+1 ?>" size="5"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}" title="11 or less integers only"name="cc<?=$i+1 ?>" size="3.2"></td>
		<td><input type="numbers" pattern="(?=.*[.])[0-9].{0,10}"title="integers with decimal value"name="tare<?=$i+1 ?>" size="2.3"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}" title="11 or less integers only"name="art<?=$i+1 ?>" size="7"></td>
		<td><input type="numbers" pattern="[0-9].{0,20}" title="20 or less integers only"name="com<?=$i+1 ?>" size="11.2"></td>
		<td><input type="numbers" pattern="(?=.*[.])[0-9].{0,10}"title="integers with decimal value"name="gross<?=$i+1 ?>" size="6.5"></td>
		<td><table border=".5px">
		<tr>
		<td><input type="numbers" pattern="(?=.*[.])[0-9].{0,10}"title="integers with decimal value"name="dms1<?=$i+1 ?>" size="5"></td>
		<td><input type="numbers" pattern="(?=.*[.])[0-9].{0,10}"title="integers with decimal value"name="dms2<?=$i+1 ?>" size="2"></td>
		</tr>
		</table></td>
		<td><input type="numbers" pattern="(?=.*[.])[0-9].{0,10}"title="integers with decimal value"name="act<?=$i+1 ?>" size="7"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}"name="perm<?=$i+1 ?>" size="14"></td>
		<td><table border=".5px">
		<tr>
			<td><input type="numbers" pattern="(?=.*[.])[0-9].{0,10}"title="integers with decimal value"name="owc1<?=$i+1 ?>" size="2"></td>
			<td><input type="numbers" pattern="(?=.*[.])[0-9].{0,10}"title="integers with decimal value"name="owc2<?=$i+1 ?>" size="6"></td>
			<td><input type="numbers" pattern="(?=.*[.])[0-9].{0,10}"title="integers with decimal value"name="owc3<?=$i+1 ?>" size="4"></td>
		</tr>
		</table></td>
		<td><input type="numbers" pattern="[0-9].{0,11}"name="chrg<?=$i+1 ?>" size="6"></td>
	</tr>
<?php }
  echo '</table>
		<input type="Submit" name="submit">
		</form>';
}

?>

</body>
</html>
