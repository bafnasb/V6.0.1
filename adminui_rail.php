<?php 
session_start();
if(isset($_SESSION['emp_type']) && isset($_SESSION['role'])){
//include("topheader.php");
include("adminhead_rail.php");
?>
<html>
<head>
</head>
<body>
<br>
<form action='updateuserrail.php' method='post'>
<table width='42%' align='center' border='0px' cellpadding='8' bordercolor='Black'>
<th width='110%' colspan='8'>To add a New Member Please Enter Username,Password and User Type</th>
<tr><td colspan='4' align='center'>Enter Username:</td><td colspan='2' align='center'><input type='text' name='usd' size='20' required></td></tr>
<tr><td colspan='4' align='center'>Enter Password:</td><td colspan='2' align='center'><input type='password' name='pda' size='20' required></td></tr>
<tr><td colspan='4' align='center'>Choose Role:</td>
<td colspan='1' align='center'><input type="radio" name="rl" value='fianance' checked>Employee</td>
<td colspan='1' align='center'><input type="radio" name="rl" value='admin'>admin</td></tr>
<tr><td align='center' colspan='4'><input type="submit" value="Submit"></td><td align='center' colspan='4'><input type="reset" value="Reset"></td></tr>
</table>
</form>
</body>
<?php
}else
Header('Location:login.php');
?>
</html>
