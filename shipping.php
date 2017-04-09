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
    background-color: #CCCCFF;
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
  <button class="tablinks" onclick="work(event, 'ship_info')">Shipping Info</button>
  <button class="tablinks" onclick="work(event, 'wagon_info')">Loaded Wagon Details</button>
</div>
<div id="ship_info" class="tabcontent">
  <form name="form1" action="insert1.php" method="post">
  <h3>Enter the Shipping Info.</h3>
  <table border="0px">
    <tr bgcolor=#CCCC66>
		<td>Forwading Note No.</td>
		<td>Sender's Name and Address</td>
		<td>Consignee's Name and address</td>
		<td>From Sliding Station</td>
		<td>Code(From)</td>
		<td>To Station</td>
		<td>Code(To)</td>
	</tr>
	<tr>
		<td><input type="text" name="fnn"pattern="[0-9]{7,}"title="Integers only" required></td>
		<td><input type="text" name="send"pattern="[A-Za-z].{3,}"title="Characters only" size="30" required></td>
		<td><input type="text" name="recieve" pattern="[a-zA-Z].{3,}"title="Characters only"size="33" required></td>
		<td><input type="text" name="fromst"pattern="[a-zA-Z].{3,}"title="Characters only" required></td>
		<td><input type="text" name="code_from"pattern="[a-zA-Z].{3,}"title="Characters only" size="10" required></td>
		<td><input type="text" name="tost" pattern="[a-zA-Z].{3,}"title="Characters only"required></td>
		<td><input type="text" name="code_to" pattern="[a-zA-Z].{3,}"title="Characters only"size="6" required></td>
	</tr>
   </table>
   <input type="Submit"onclick="return validation()">
 </form>
</div>
<div id="wagon_info" class="tabcontent">
	<form action="wagon.php" method="POST">
	Enter the Number of wagon: <input type="numbers"pattern="[0-9].{,2}"title="Integers only" name="rows" />
	Enter the date of Forwarding Note:<input type="date" name="date">
	<input type="submit" value="Get Data Table" name="submit" />
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

/*function validation()
{
	var txt;
g1=document.getElementByName("fnn").value;
if(!(isNaN(g1)))
{
	txt="input invalid";
	g1.focus();
	return true;
}
else
	return false;

g3=document.getElementByName("code_from").value;
 if(g3.match(letters))    
      return true;    
  else  
      {  
      alert('Please input alphabet characters only');  
      g3.focus();
      return false;  
      } 
g4=document.getElementByName("tost").value;
 if(g4.match(letters))    
      return true;    
  else  
      {  
      alert('Please input alphabet characters only');  
      g4.focus();
      return false;  
      } 
g5=document.getElementByName("code_to").value;
 if(g5.match(letters))    
      return true;    
  else  
      {  
      alert('Please input alphabet characters only');  
      g5.focus();
      return false;  
      } 

} */
</script>
</body>
</html>
