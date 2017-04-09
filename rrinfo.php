<?php 
session_start();
include('header.php');
if(isset($_SESSION['ins'])){
	echo '<script>window.alert("Data Inserted Sucessfully!")</script>';
session_destroy();
	}?>
<html>
<body>
<head>
<style>
body {font-family: "Lato", sans-serif;}

div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

div.tab button:hover {
    background-color: green;
}

div.tab button.active {
    background-color: #red;
}

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="work(event, 'rr_info')">RR Info</button>
  <button class="tablinks" onclick="work(event, 'wagon_info')">Loaded Wagon Details</button>
  <button class="tablinks" onclick="work(event, 'finalrr')">Final RR</button>
</div>
<div id="rr_info" class="tabcontent">
  <form action="rrinsert.php" method="post">
  <h3>Enter the Shipping Info.</h3>
  <table border=".3px">
    <tr>
		<td>Forwading Note No.</td>
		<td>Invoice No.</td>
		<td>RR No.</td>
		<td>Date</td>
		<td>TRFC_Type</td>
		<td>No.of Wagon</td>
		<td>Risk Rate</td>
		<td>Chargable Rate</td>
		<td>Hand Led by</td>
		<td>Rate Type</td>
		<td>Class</td>
		<td>Total Chargable Weight</td>
		<td>Weight Unit</td>
		<td>Rate</td>
		<td><table>
		<tr><td colspan="2">Permissible Charges</td></tr>
		<tr>
		<td>Class</td>
		<td>Rate</td>
		</tr>
		</table></td>
	</tr>
	<tr>
		<td><input type="numbers" pattern="[0-9].{0,11}"title="11 or less integers only" name="fnn"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}"title="11 or less integers only" name="in" size="25"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}"title="11 or less integers only" name="rrno" size="28"></td>
		<td><input type="date" pattern="(?=.*[.])[0-9].{0,10}"title="10 or less integers only" name="date"></td>
		<td><input type="text" pattern="[A-Za-z].{0,5}"title="5 or less letters only"name="trfc" size="8"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}"title="11 or less integers only" name="now"></td>
		<td><input type="text" pattern="[A-Za-z].{0,5}"title="5 or less letters only" name="risk" size="5"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}"title="11 or less integers only" name="cr" size="5"></td>
		<td><input type="text" pattern="[A-Za-z].{0,5}"title="5 or less letters only" name="hlb" size="5"></td>
		<td><input type="text" pattern="[A-Za-z].{0,5}"title="5 or less letters only" name="rt" size="5"></td>
		<td><input type="numbers" pattern="[0-9].{0,11}"title="11 or less integers only" name="cla" size="5"></td>
		<td><input type="text" name="tcw" size="5"></td>
		<td><input type="text" pattern="[A-Za-z].{0,3}"title="3 or less letters only" name="wu" size="5"></td>
		<td><input type="text" name="rate" size="5"></td>
		<td><table>
		<tr>
		<td><input type="numbers" pattern="[0-9].{0,11}"title="11 or less integers only" name="pcc" size="5"></td>
		<td><input type="text" name="pcr" size="5"></td>
		</tr></table></td>
	</tr>
   </table>
   <input type="Submit">
 </form>
</div>
<div id="wagon_info" class="tabcontent">
	<form action="temp.php" method="post">
	Enter the Forwading Note No:<input type="text" name="bday" >
	<input type="submit" value="Fetch Data" name="submit" >
	<input type="submit" value="Update" name="update">
	</form>
</div>
<script>
function work(evt, wrks) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(wrks).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>
