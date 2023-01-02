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
  <title>Arbaminch Billing System</title>
  <link rel="icon" type="image/png" href="Img/BILL.png"/>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">

  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
     <img width="1200" height="120" src="Img/am.jpg" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
     <ul id="menu">
	
      <li><a href="customer.php"><font color="white">HOME</font></a></li>	
	   <li><a href="customerregist.php"><font color="white">Register</font></a></li>	
	  <li><a href="login1.php"><font color="white">pay money</font></a></li>
	   <li><a href="viewreport.php""><b><font color="white">view report</font></b></a></li>
		  <li><a href="viewbill.php"><font color="white">view bill</font></a></li>
		
		  <li><a href="insertmoney.php"><font color="white">Add money</font></a></li>
	  <li><a href="change.php""><b><font color="white">change password</font></b></a></li>
		  <li><a href="logout.php"><font color="white">logout</font></a></li>
       
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
<body bgcolor=#9494B8>

<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr>
</body>
            
			 

		<img width="215" height="180" src="Img/wt.jpg"/>
		<font size="5"color="green"><b></b></font>
		
			<table bgcolor="#4b474"align ="center" id="table2">
			<tr><td></td><td><img width="215" height="100"src="Img/11.jpg">
			</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td>
			
					
			</tr>
			<tr><td></td><td><img width="215" height="50"src="Img/8.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
			
			</tr>
			
			
			
			</table>
			
               </tr>
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item">
		<center>
		 <div style="width:820px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='insertcustomer.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/BILL.png"/>&nbsp;&nbsp;<strong><font color="white" size="2px">Register here!</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="customer.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />

<table bgcolor="gray"align="center" style="border:1px solid black; border-radius:5px;margin-top:20px;box-shadow:10px 20px 10px black;" width="600" height="350px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green><font color=red><font color=gray></font)</font></td></tr>
<!--<tr><td><font color=red> * </font><font color=black>Date<td><input type="date"  value="<?php echo $date?>"  required x-moz-errormessage="Please Enter The Year In Year/Month/Date Format " title="Please Enter The Year In Year/Month/Date Format  "  name="date"  id="date" size='20%'   placeholder='Y/M/D' value=""/></td></tr><!--city==date-->
<!--<tr><td><font color=red> * </font><font color=black>Procurement Office:</td><td><input type="text" pattern="\D{2,20}" required x-moz-errormessage="Please Enter Office Name " title="Please Enter The  Office Name  "  name="offi"  id="offi" size='20%'   placeholder='Office Name'/></td></tr>--><tr><td><font color=red> 

</select></td></tr><tr><td><font color=red> * </font><font color=black>user_id :</td><td><input type="text"pattern="\D{3,5}/\d{3}/\d{2}" required x-moz-errormessage="Please Enter Your Correct ID Number " title="Please Enter Your ID Number"  name="user_id"  value="" size='20%' id="txt_pass" placeholder='ID'></input></td></tr>
<tr><td><font color=red> * </font> <font color=black>first name :</font></td><td><input type="text" pattern="\D{2,10}" required x-moz-errormessage="Please Enter your name" title="Please Enter your name "  name="fname"  value="" size='20%' id="txt_fname" placeholder='Fname'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>last name:</td><td><input type="text" name="lname" pattern="\D{2,10}" required x-moz-errormessage="Please Enter your middle name  " title="Please Enter your middle name  "   size='20%'  id="txt_lname" value='' placeholder='lname' /></td></tr>

<tr><td><font color=red> * </font> <font color=black>address :</font></td><td><input type="text" name="address" pattern="\D{2,10}" required x-moz-errormessage="Please Enter your address" title="Please Enter your address "  name="address"  value="" size='20%' id="txt_address" placeholder='address'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>house_NO :</td><td><input type="text" name="house_no" value="" size='20%' id="txt_l" placeholder='house no' pattern ="[0-9]+" required x-moz-errormessage="Please Enter your house no " title="Please Enter your house no" ></input></td></tr><br>
<tr><td><font color=red> * </font> <font color=black>phone_No :</font></td><td><input type="text" name="phone_no" pattern="[0-9]+" required x-moz-errormessage="Please Enter your phone no" title="Please Enter your phone no "  name="phone_no"  value="" size='20%' id="txt_phone" placeholder='phoneno'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>servicetype:</td><td>
<select name="servicetype" required x-moz-errormessage="Please Enter your service type " title="Please Enter your service type  " >
<option value=""></option>
<option>water billing</option>
<option>electric billing</option>
<option>tele billing</option>
</select>
 </td></tr>
 
<tr><td colspan="2" align="center"><input style="background-color:#808000"type='submit' class="button_example" value='Save' name='submitMain' Onclick="return check(this.form);"/>
<input style="background-color:#808000"type='reset' class="button_example" value='clear'/></td></tr>
</form>
</center>
</fieldset>
</table>
		 
		  </div>
		 	  
	  </div>
	 
	<!--close sidebar-->
</body>
</html>
