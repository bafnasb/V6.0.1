<?php session_start();
$_SESSION['dt']=date("Y-m-d");
?>
<?php
if(isset($_SESSION['emp_type']) && isset($_SESSION['role'])) {
    unset($_SESSION['emp_type']);
    unset($_SESSION['role']);
}
?>
<html>
<head>
<script type='text/javascript' language='javascript'>
function ClearForm(){
document.MyForm.reset();
}
</script>
<title>MINISTRY OF STEEL</title>
<style type ="text/css">
*{
	margin:0px;
	padding:0px;
}

.container
{
	width:100%
}
.wrapper
{
	width:100%;
	margin:auto;
}
.dark
{
	background-color:#31353d;
	color:white;
}
#top_left
{
	display:inline-block;
	
}
#top_right
{
float:right;

}
#logo_right
{
float:right;
}
ul
{
}
ul li
{
font-size:15px;
width:600px;
display:inline-block;
height:18px;
line-height:12px;
text-align:center;
}
ul li a
{
color:white;
text-decoration:none;
display:block;
}
ul li a:hover
{
color: #59d5d8;
}
#clear{
clear:both;
}
.aa{
	width: 21.87em;
	height: 20.87em;
	background-color: rgba(0,0,0,.9);
	margin:0 auto;
	margin-top:3.75em;
	padding-top:1.25em;
	padding-left:1.0em;
	border-radius:0.9375em;
	color:white;
	font-weight:bolder;
}
.aa input[type="text"]{
	width:20.5em;
	height: 2.90em;
	border=0;
	border-radius:0.3125em;
	padding-left:0.3125em;
}


.aa input[type="password"]{
	width:20.5em;
	height: 2.90em;
	border=0;
	border-radius:0.3125em;
	padding-left:0.3125em;
}
.aa input[type="submit"]{
	width:6.25em;
	height: 2.1875em;
	border=0;
	border-radius:0.3125em;
	background-color: skyblue;
	cursor:pointer;
}
</style>
</head>
<body>
<div class="container dark">
	<div class="wrapper" id="top_div">
		<div id="top_left">
<script type="text/javascript">
var tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock()
{
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
if(nhour==0)
	{
	ap=" AM";
	nhour=12;
	}
else if(nhour<12)
	{
	ap=" AM";
	}
else if(nhour==12)
	{ap=" PM";
	}
else if(nhour>12)
	{
	ap=" PM";
	nhour-=12;
	}

if(nmin<=9) 
	nmin="0"+nmin;
if(nsec<=9) 
	nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" , "+nyear+" | "+nhour+":"+nmin+":"+nsec+ap+"";
}
window.onload=function()
	{
	GetClock();
	setInterval(GetClock,1000);
	}
</script>
<!--<div id="clockbox"></div>--> 
<table width="100%">
<tr>
<td id="clockbox" width="95%"></td>
<!--<td width="5%"> | हिंदी  | </td>-->
</tr>
</table>
</div>
<div id="top_right">

			<a href="login.php">
			<img border="0" src="home.png" width="30" height="22.5">
			</a>
			</div>
			<div id="clear">
</div>
			</div>
			</div>
<div class="container">
	<div class="wrapper">
		<div id="logo_left">
			<img src="emblem1.png" height="120">
			<div id="logo_right">
			<img src="logo.png">
			</div>
			<div id="clear">
</div>
			
	</div>
	</div>
	<div class="container dark">
	<div class="wrapper">
	<ul>
	<li><a href="abouthome.php">ABOUT</a></li>
	<li><a href="contacthome.php">CONTACT</a></li>
	
	</ul>
	</div>
</div>
<body>
<h1  style="color:blue;" align='center'>Contact Us At:</h1>
  <TABLE border=0 align="center" cellPadding=7 cellSpacing=0>
    <TBODY>
      <TR>
        <TD  vAlign=top><div align="center"><strong>Ministry of Steel <br>
  Government of India<br>
  Udyog Bhavan<br>
  New Delhi - 110107</strong></div>
 
  </TD>
      </TR>
      <TR>
        <TD  vAlign=top><div align="center">
          <p><strong>Fax : 91-11-23063236<br>
    Phone : 91-11-23063417</strong><br>
    <br>
    <strong>Email : <a href="mailto:ric-steel@nic.in">ric-steel@nic.in</a></strong></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
        </span>
		</TD>
      </TR>
</body>
</html>

