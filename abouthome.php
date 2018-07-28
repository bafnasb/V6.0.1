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
<h1  style="color:blue;">Major Activities Of The Ministry</h1>
<p>->Co-ordination and planning of the growth and development of Iron and Steel Industry in the country (including Re-rolling Mills, Alloy Steel and Ferro Alloy Industries, Refractories) both in the Public and Private Sectors;<br>


->Formulation of policies in respect of production, pricing, distribution, import and export of iron & steel, ferro alloys and refractories; and<br>


->Development of input industries relating to iron ore, manganese ore, chrome ore and Refractories etc. , required mainly by the steel industry.</p>


<h1 style="color:blue;">Administrative Setup - Ministry of Steel, Government of India</h1>

           <P align=justify>The Ministry of Steel is under the overall charge of the Hon'ble Minister of   Steel. </P>
    
      <P align=justify> He is assisted by a Secretary to the Government of India, a Additional Secretary and Financial Adviser to Government of India, 4 Joint Secretaries, a Chief Controller of Accounts also looking after the accounting matters of the Ministry, one Economic Adviser of the rank of Joint Secretary, 6 Directors, 2 Deputy Secretaries, 12 Under Secretaries, One Deputy Director, other Officers and supporting staff and a Technical Wing under the charge of an Industrial Adviser to Government of India.</P>
      <TABLE  border=1 align="center" cellPadding=5 cellSpacing=0 bordercolor="#CCCCCC">
    <TBODY>
      <TR>
        <TD vAlign=center colSpan=5><P align=right><strong>
        </strong></P>
        </TD>
      </TR>
      <TR>
        <TD vAlign=center  colSpan=5><strong>To prevent attraction for spamming email addresses have been obstructed. Kindly read [at] as @ and [dot] as .</strong></TD>
      </TR>
      <TR>
        <TD colSpan=5 vAlign=center bgcolor="pink"><P align=center class="Theading"><U>OFFICIALS IN THE MINISTRY OF STEEL</U> </P></TD>
      </TR>
      <TR>
        <TD vAlign = center>&nbsp;</TD>
		<td><B>Office Address</B></TD>
        <TD vAlign=top ><B>Telephone No</B></TD>
        <TD vAlign=top ><B>E-mail</B></TD>
		<td></td>
      </TR>
      <TR>
        <TD vAlign=top ><B>Hon'ble Minister</B></TD>
        <TD vAlign=top >Shri Chaudhary Birender Singh</TD>
        <TD vAlign=top >Room No 192,<br> 
        Udyog Bhawan</TD>
        <TD vAlign=top > 23061486 </TD>
        <TD vAlign=top >minister[dot]steel[at]nic[dot]in</p>
          </TD>
      </TR>
      <TR>
        <TD vAlign=top ><B>PS to Minister</B></TD>
        <TD vAlign=top >Ms. Prerna Puri </TD>
        <TD vAlign=top >Room No 193A,
          <br>
          Udyog Bhawan</TD>
        <TD vAlign=top > 23063586 </TD>
        <TD vAlign=top >&nbsp; </TD>
      </TR>
      <TR>
        <TD vAlign=center ><B>Hon'ble Minister of State</B> </TD>
        <TD vAlign=center >Shri Vishnu Deo Sai</TD>
        <TD vAlign=top >Room No 146,<br>
Udyog Bhawan</TD>
        <TD vAlign=top > 23063810 </TD>
        <TD vAlign=top >&nbsp;</TD>
      </TR>
	  <!--
      <TR>
        <TD vAlign=center ><strong>PS to Minister of State </strong></TD>
        <TD vAlign=center >&nbsp;</TD>
        <TD vAlign=top >&nbsp;</TD>
        <TD vAlign=top >&nbsp;</TD>
        <TD vAlign=top >&nbsp;</TD>
      </TR>
	  -->
      <TR>
        <TD vAlign=center ><strong>PS to Minister of State </strong></TD>
        <TD vAlign=center >Shri Rahul Bhagat </TD>
        <TD vAlign=top >Room No 148,<br>
Udyog Bhawan</TD>
        <TD vAlign=top >23061370</TD>
        <TD vAlign=top >rahul.bhagat[at]ips[dot]gov[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=center ><B>Secretary<br>
          </B></TD>
        <TD vAlign=center >Dr. Aruna Sharma</TD>
        <TD vAlign=top >Room No 291, <br>
        Udyog Bhawan</TD>
        <TD vAlign=top >23063489<BR>
        23063912</TD>
        <TD vAlign=top >secy-steel[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=top ><B>Additional Secretary &amp; Financial Adviser&nbsp;</B></TD>
        <TD vAlign=top >Shri 


Saraswati Prasad</TD>
        <TD vAlign=top >Room No 294, <br>
        Udyog Bhawan</TD>
        <TD vAlign=top >23062630</TD>
        <TD vAlign=top >asfasteel[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=center ><B>Joint Secretary</B></TD>
        <TD vAlign=center >Shri Syedain Abbasi</TD>
        <TD vAlign=top >Room No 190,<br> 
          Udyog Bhawan</TD>
        <TD vAlign=top >23063297</TD>
        <TD vAlign=top >s[dot]abbasi[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=center ><B>Joint Secretary</B></TD>
        <TD vAlign=center > Ms. Urvilla Khati </TD>
        <TD vAlign=top >Room No 296, <br>
    Udyog Bhawan</TD>
        <TD vAlign=top >23061896</TD>
        <TD vAlign=top >jsk-steel[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=center ><B>Joint Secretary</B></TD>
        <TD vAlign=top >Shri Sunil Barthwal </TD>
        <TD vAlign=top >Room No 289,<br>
    Udyog Bhawan</TD>
        <TD vAlign=top >23063170</TD>
        <TD vAlign=top >s[dot]barthwal[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=top ><B>Joint Secretary</B></TD>
        <TD vAlign=top >Shri T. Srinivas</TD>
        <TD vAlign=top >Room No 289A,<br>
    Udyog Bhawan</TD>
        <TD vAlign=top class="style27" >23063872</TD>
        <TD vAlign=top >t[dot]srinivas[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=center ><B>Chief Controller of Accounts</B></TD>
        <TD vAlign=center > Shri 


Bhupal Nanda</TD>
        <TD vAlign=top >Room No 299C,<br> 
          Udyog Bhawan</TD>
        <TD vAlign=top >23063730</TD>
        <TD vAlign=top >ccasteel[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=top ><B>Economic Advisor</B></TD>
        <TD vAlign=top ><FONT face=Arial size=2>Shri</FONT> Suraj Bhan </TD>
        <TD vAlign=top >Room No 289,<br> 
          Udyog Bhawan</TD>
        <TD vAlign=top >23063020</TD>
        <TD vAlign=top >suraj[dot]bhan[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=top ><B>Industrial Adviser</B></TD>
        <TD vAlign=top >Vacent</TD>
        <TD vAlign=top >Room No 190A, <br>
        Udyog Bhawan </TD>
        <TD vAlign=top >23061064</TD>
        <TD vAlign=top >iasteel[at]nic[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=top ><B>Director</B></TD>
        <TD vAlign=top >Shri Anupam Prakash </TD>
        <TD vAlign=top >Room No 189,<br>
    Udyog Bhawan</TD>
        <TD vAlign=top >23062981</TD>
        <TD vAlign=top >&nbsp;</TD>
      </TR>
      <tr>
        <td valign="top"><strong>Director</strong></td>
        <td valign="top"><p>Shri Mahabir Presad  </p></td>
        <td valign="top">Room No 185,<br>
    Udyog Bhawan </td>
        <td valign="top"><p> 23062386 </p></td>
        <td valign="top">prasad[dot]mahabir[at]nic[dot]in</td>
      </tr>
      <TR>
        <TD vAlign=top ><strong>Director</strong></TD>
        <TD vAlign=top >Shri <span class="desc">K. S. Samarendra Nath</span></TD>
        <TD vAlign=top >Room No 116,<br>
    Udyog Bhawan</TD>
        <TD vAlign=top >23063046</TD>
        <TD vAlign=top >samar[dot]nath[at]nic[dot]in</TD>
      </TR>
      <tr>
        <td valign="top"><strong>Director</strong></td>
        <td valign="top">Shri Manvendra Goyal</td>
        <td valign="top">Room No 188,<br>
Udyog Bhawan</td>
        <td valign="top"> 23063770 </td>
        <td valign="top">goyal[dot]manvendra[at]nic[dot]in</td>
      </tr>
      <tr>
            <td valign="top"><p><strong> Deputy Secretary</strong></p></td>
            <td valign="top"><p>Shri Subhash Bhattacharya </p></td>
            <td valign="top"><p> Room No 120,<br>
        Udyog Bhawan </p></td>
            <td valign="top"><p> 23062874 </p></td>
            <td valign="top"><p>b[dot]subhash[at]nic[dot]in</p></td>
        </tr>
      <tr>
        <td valign="top"><strong>Deputy Secretary</strong></td>
        <td valign="top">Shri N K Wadhwa  </td>
        <td valign="top">Room No 65,<br>
Udyog Bhawan </td>
        <td valign="top"> 23063739  </td>
        <td valign="top">naresh[dot]wadhwa[at]nic[dot]in </td>
      </tr>
      <TR>
        <TD vAlign=top ><strong>Deputy Secretary </strong></TD>
        <TD vAlign=top >Shri Arun Kumar Kailoo</TD>
        <TD vAlign=top >Room No 187,<br>
    Udyog Bhawan</TD>
        <TD vAlign=top class="style27" >23063722</TD>
        <TD vAlign=top class="style27" >arunk[dot]kailoo[at]gov[dot]in</TD>
      </TR>
      <TR>
        <TD vAlign=top ><B>Addl Industrial Advisor</B></TD>
        <TD vAlign=top >Vacant</TD>
        <TD vAlign=top >Room No 399, <br>
    Udyog Bhawan </TD>
        <TD vAlign=top >23063355</TD>
        <TD vAlign=top >&nbsp;</TD>
      </TR>
      <TR bgcolor="#026CC4">
        <TD colspan="5" vAlign=top class="Theading">NODAL OFFICER FOR WEBSITE</TD>
      </TR>
      <TR>
        <TD vAlign=top ><B>Joint Secretary</B></TD>
        <TD vAlign=top >Shri T. Srinivas</TD>
        <TD vAlign=top >Room No 289A,<br>
    Udyog Bhawan</TD>
        <TD vAlign=top ><span class="style27">23063872</span></TD>
        <TD vAlign=top >t[dot]srinivas[at]nic[dot]in</TD>
      </TR>
      <TR bgcolor="blue">
        <TD colspan="5" vAlign=top class="heading"><strong class="style30"><a href="grievlist.htm" target="_top"><FONT face=Arial color="#edfafe">Officials  handling staff / public grievances in the Ministry</FONT></a></strong> </TD>
      </TR>
      <TR bgcolor="blue">
        <TD colspan="5" vAlign=top><A href="act/pio.pdf" target="_blank"><FONT face=Arial color="#edfafe"><B>RTI Officers</B></FONT></A></TD>
      </TR>
    </TBODY>
  </TABLE>   
<h1  style="color:blue;"></h1>
