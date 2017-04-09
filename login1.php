<html>
<head>
<script type='text/javascript' language='javascript'>
function ClearForm(){
document.MyForm.reset();
}
</script>
<title>MINISTRY OF STEEL</title>
<style type ="text/css">
body{
	background-image:url(bg1.png);
	background-size:cover;
}
*{
	margin:0px;
	padding:0px;
}
td{
color:white;
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
	height: 19.19em;
	background-color: rgba(0,0,0,.4);
	margin:0 auto;
	margin-top:3.75em;
	padding-top:1.25em;
	padding-left:1.0em;
	border-radius:0.9375em;
	color:black;
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
#table{
	color:black;
}
#footer
{
width:100%;
text-align:center;
position:absolute;
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
			<img src="emblem2.png" height="112">
			
		
			
			<div id="logo_right">
			<img src="logo.png">
			</div>
			<div id="clear">
</div>
			
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
<div class="aa">
<b><h1 align="center"><u>Login</u></h1></b><br>
<form action="logic.php" method="post" name="MyForm">
<label><h2>Username:</h2></label><br>
<input type="text" placeholder="Enter Username.." name="us"><br><br>
<label><h2>Password:</h2></label><br>
<input type="password" placeholder="Enter Password.." name="pd"><br><br>
<label><input type="submit" value="LOGIN"></label>
</form>
</div><br>
<div id="footer">
<div align="center"><!-- #BeginLibraryItem "/newfooter.lbi" --><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                               
  <tr> 
         <div align="center">
       <a href="terms and cond.html"><strong>Terms &amp; Conditions</strong></a> || <a href="copyright policy.html"><strong>Copyright Policy</strong></a>          </div>
                                                     </div>
											
                                                </tr>
                                                
                                                <tr>
        <td colspan="2" align="center" valign="middle" id="table">
             This Website belongs to Ministry of Steel, Government of India Content on this website is published
             and managed by Ministry of Steel. For any query regarding this website Please Contact.
              The site can be best viewed in 59.0.3047 using 1366x768 resolution, This site is designed
              and hosted by GnC.
                                                        <br>
                                                  </td>
                                                </tr>
                                                
                                            <br>

                                            Last Updated on :01.04.2017<br>
&copy: Copyright by Gnc
</div>	
									



</body>
</html>
