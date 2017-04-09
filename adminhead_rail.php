<html>
<head>
<style>
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
width:250px;
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

			<a href="#">
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
	<li><a href='adabout.php'>ABOUT</a></li>
	<li><a href='adcontact_rail.php'>CONTACT</a></li>
	<li><a href='ui.php'>VIEW REPORT</a></li>
	<li><a href='adminui_rail.php'>ADD USER</a></li>
	<li><a href='logout.php'>SIGN-OUT</a></li>
	</ul>
	</div>
</div>
</body>
</html>
