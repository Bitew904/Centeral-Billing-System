
<?php   
 session_start();
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<?php   
 //session_start();
 include("see.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>ARBAMINCH BILLING OFFICE</title>
  <link rel="icon" type="image/png" href="Img/BILL.png"/>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">



  .auto-style3 {
	text-align: left;
}
.auto-style4 {
	text-align: right;
}



  </style>

</head>
<script language="javascript" >
                function  calculatebill()
                {   
var current = parseInt(document.getElementById("amountofbill").value);
				var rate = parseInt(document.getElementById("rate").value);
               var  units=document.getElementById("amountofbirr"); units.value =(rate)*current*0.043;                
                 
   } </script>

<body>
  <div id="main">
    <div id="header" style="width: 1197px; height: 109px;">
	<div id="logo" style="width: 269px; height: 99px;">
	
		<img alt="LOGO" height="105" src="BILL.png" width="269" class="auto-style5" /></div>
	<div id="title" style="left: -564px; top: 1px; height: 120px">
		<h1><strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>የአርባ ምንጭ ከተማ ማዕከላዊ ደረሰኝ አገልግሎት</strong></h2>
    </div>
</div>

<?php   
 include("zheader.php");
?>
<div id="site_content">		

	  <div class="sidebar_container" style="width: 244px">       
		<div class="sidebar">
          <div class="sidebar_item">
<body bgcolor=#9494B8>
<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
 <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr></body>
            
			
			
					<img width="215" height="200" src="Img/mo.jpg"/>
					<font size="5"color="green"><b></b></font>
		
			<table bgcolor="#4b474"align ="center" id="table2">
			<tr><td><img width="215" height="50"src="Img/birr.jpg"></td>
			
					
			</tr>
			<tr><td><img width="215" height="50"src="Img/br.jpg"></td>
			
			
			</tr>
			
			
			<tr><td><img width="215" height="50"src="Img/mn.png"></td>
			
			</tr>
			</table>
			<br><br>
			<hr><hr>
			 <img width="215" src="Img/feln-crowd_2.png"/>
			
			<hr></hr>
                     <marquee direction="up">
					 
                     <p>&nbsp;</p></marquee></th>
               </tr>
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
      
      </div>
	 

	  <div id="content1" style="width: 792px">
        <div class="content_item" style="height: 692px">
		<center>
		<div style="width:820px; height:637px; position:relative; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); left: 95px; top: -16px; margin-left: auto; margin-right: auto; margin-bottom: 0;">


	<?php
$service=$_POST['service_type'];
$CID=$_POST['search'];

require_once("see.php");
$name=$_POST['search'];
$service=$_POST['service_type'];
if($service=='electricbill')
{
mysql_connect('localhost','root','');
mysql_select_db('electric')or die(mysql_error());
}
if($service=='telephonebill')
{
mysql_connect('localhost','root','');
mysql_select_db('telecome')or die(mysql_error());
}
if($service=='waterbill')
{
mysql_connect('localhost','root','');
mysql_select_db('dbwater')or die(mysql_error());
}

$sql=mysql_query("select *  from customer where CID ='$CID'");
if(mysql_num_rows($sql) < 1) {
            echo " ";
			echo "<script>alert('customer  not found ,please enter Customer ID correctly!.');window.location.href='cash.php';</script>";
		   exit();
        }


while($row = mysql_fetch_array($sql))
  {
	  ?> 

<form  method='POST' action='insertcash.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; 
height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/emp.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">
insert customer money here !</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px;
 height:12px;">
 <a href="employee.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
 
<!--<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />-->
<table style="width: 472px; height: 58px">
<tr><th style="height: 8px">Rate bill&lt;300</th><th style="height: 8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
	<th style="height: 8px"> </th><th style="width: 51px; height: 8px"> </th>
	<th style="width: 109px; height: 8px">Rate bill &gt;300</th></tr>
<tr><td style="height: 6px">1 watt</td><td colspan="2" style="height: 6px">=4.25 birr</td>
	<td style="width: 51px; height: 6px">1 watt</td>
	<td style="width: 109px; height: 6px">=</td><td style="height: 6px">2.25 birr</td></tr>
<tr><td style="height: 12px">1 Litter</td><td colspan="2" style="height: 12px">=2.15 birr</td>
	<td style="width: 51px; height: 12px">1 Litter</td>
	<td style="width: 109px; height: 12px">=</td><td style="height: 12px">1.00 birr</td></tr>
<tr><td style="height: 16px">1 minut</td><td colspan="2" style="height: 16px">=1.75 birr</td>
	<td style="width: 51px; height: 16px">1 minut</td>
	<td style="width: 109px; height: 16px">=</td><td style="height: 16px">1.75 birr</td></tr>

</td>
</tr>
</table>
<table bgcolor="#A9A9A9"align="center" style="border:1px solid black; margin-top:15px;box-shadow:10px 20px 10px black; background-color: #00CC66;" width="650" height="350px">
<tr><td colspan=2 >&nbsp;</td></tr>
<!--<tr><td><font color=red> </font><font color=black>date<td><input type="date"  value="<?php echo $date?>"  required x-moz-errormessage="Please Enter The Year In Year/Month/Date Format " title="Please Enter The Year In Year/Month/Date Format  "  name="date"  id="date" size='20%'   placeholder='Y/M/D' value=""/></td></tr><!--city==date-->
<tr><td class="auto-style4" style="width: 137px"><font color=red> * </font> <font color=black>fname :</font></td>
	<td class="auto-style3" style="width: 334px">
	<input type="text" pattern="\D{2,10}" required x-moz-errormessage="Please Enter your fname" title="Please Enter your fname "  name="fname"  value="<?php echo $row['fname'];?>" size='20%' id="txt_fname" placeholder='Fname' style="width: 242px"></input></td></tr>
<tr><td class="auto-style4" style="width: 137px"><font color=red> * </font><font color=black>lname:</td>
	<td class="auto-style3" style="width: 334px">
	<input type="text" name="lname" pattern="\D{2,10}" required x-moz-errormessage="Please Enter your lname  " title="Please Enter your lname   "   size='20%'  id="txt_lname" value='<?php echo $row['lname'];?>' placeholder='Lname' style="width: 238px" /></td></tr>
<tr><td class="auto-style4" style="width: 137px"><font color=red> * </font> <font color=black>address :</font></td>
	<td class="auto-style3" style="width: 334px">
	<input type="text"  required x-moz-errormessage="Please Enter your address" title="Please Enter your address "  name="address"  value="<?php echo $row['address'];?>" size='20%' id="txt_fname" placeholder='address' style="width: 236px"></input></td></tr>
<tr><td style="width: 137px" class="auto-style4"><font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; amount of bill 
	:</font></td>
	<td style="width: 334px" class="auto-style3">
	<input type="text"  required x-moz-errormessage="Please Enter number Only " title="Please Enter number Only "  name="amountofbill"  value="<?php echo $row['amountofbill'];?>" size='20%' id="amountofbill" placeholder='amountofbill' style="width: 228px"></input></td></tr>
  <tr><td class="auto-style4" style="width: 137px"><font color=red> * </font> <font color=black>Rate:</font></td>
	 <td style="width: 334px">
	<input type="text"  required x-moz-errormessage="Please Enter rate" title="Please Enter rate "  name="rate"  value="" size='20%' id="rate" placeholder='rate' style="width: 234px"></input></td></tr>

 <tr><td class="auto-style4" style="width: 137px"><font color=red> * </font> <font color=black>amountofbirr :</font></td>
	 <td class="auto-style3" style="width: 334px">
	<input type="text"  required x-moz-errormessage="Please Enter amount of birr" title="Please Enter your amount of birr "  name="amountofbirr"  value="" size='20%' id="amountofbirr" placeholder='amountofbirr' style="width: 234px"></input></td></tr>
<tr><td class="auto-style4" style="width: 137px"><font color=red> * </font> <font color=black>phone_No :</font></td>
	<td class="auto-style3" style="width: 334px">
	<input type="text" pattern="[0-9]+"  required x-moz-errormessage="Please Enter your phone No" title="Please Enter your phone No "  name="phone_no"  value="<?php echo $row['phone'];?>" size='20%' id="txt_phone_no" placeholder='phoneno' style="width: 234px"></input></td></tr>
<tr><td class="auto-style4" style="width: 137px"><font color=red> * </font><font color=black>servicetype:</td>
	<td class="auto-style3" style="width: 334px">
<select name="servicetype" required x-moz-errormessage="Please Enter service type you need  " title="Please Enter service type you need" style="width: 181px" >
<option value=""></option>
<option>water bill</option>
<option>electric bill</option>
<option>telecome bill</option>
</select>
 </td></tr>
 <tr><td class="auto-style4" style="width: 137px"><font color=red> * </font><font color=black>date:</td><td><input type="date" name="date" id="myDate" value="2017-06-10"></td></tr>
 <tr><td class="auto-style4" style="width: 137px"><font color=red> * </font><font color=black>
	 payment mounth:</td><td><select name="mounth" required x-moz-errormessage="Please Enter mounth you need  " title="Please Enter mounth you need" style="width: 181px" >
<option value="">june</option>
<option>june</option>
<option>july</option>
<option>august</option>
<option>september</option>
<option>october</option>
<option>november</option>
<option>december</option>
<option>january</option>
<option>february</option>
<option>march</option>
<option>april</option>
<option>may</option>
</select>
 </td></tr>
 <?php }?>
<tr><td style="width: 137px" class="auto-style4"><input type="button" name="Sumbit" style="background-color:#808000" value="compute" class="button_example" onclick="javascript:calculatebill()"/></td>
	<td class="auto-style3" style="width: 334px">
<input style="background-color:#808000"type='submit' class="button_example" value='transfer' name='submitMain' Onclick="return check(this.form);"/>&nbsp;&nbsp;&nbsp;
<input style="background-color:#808000"type='reset' class="button_example" value='clear'/></td></tr>
<?php
mysql_close(); 
?>
</form>
</center></div>
		 </div>
		 		 	   </div>
	  

   	
	
</div>
	<!--close sidebar-->
</body>
</html>
