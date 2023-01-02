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
  <title>ARBAMINCH CENTRALIZED BILLING SYSTEM</title>
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
    <div id="header" style="width: 1197px; height: 109px;">
	<div id="logo" style="width: 269px; height: 99px;">
	
		<img alt="LOGO" height="105" src="BILL.png" width="269" class="auto-style5" /></div>
	<div id="title" style="left: -564px; top: 1px; height: 120px">
		<h1><strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>የአርባ ምንጭ ከተማ ማዕከላዊ ደረሰግኝ አገልግሎት</strong></h2>
    </div>
</div>

	<div id="menubar">
     <ul id="menu">
	  <li><a href="admin.php"><font color="white">HOME</font></a></li>
	  <li><a href="manageacc1.php""><b><font color="white">control account</font></b></a></li>
	   <li><a href="createaccount.php"><font color="white">Create  Account</font></a></li>
	  <li><a href="update.php""><b><font color="white">Update  Account</font></b></a></li>
	  <li><a href="delete.php""><b><font color="white">Delete Account</font></b></a></li>
	   
		<li><a href="change.php""><b><img height="25" width="80" src="Img/changepassword.png"/></b></a></li>
	 	  <li><a href="logout.php"><img  height="30" src="Img/logout.jpg"></a></li>
       </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container" style="width: 232px">       
		<div class="sidebar">
          <div class="sidebar_item">
<body bgcolor=#9494B8>
<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr></body>
            
			
			<img width="215" height="170" src="Img/admin.jpg"/>
		<font size="5"color="green"><b></b></font>
			<table bgcolor="#4b474"align ="center" id="table2" style="width: 237px">
			<tr><td></td><td><img width="215" height="100"src="Img/wt.jpg">			
					
			</tr>
			<tr><td></td><td><img width="215" height="50"src="Img/8.jpg		</tr>
			
			
			<tr><td></td><td><img width="215" height="50"src="Img/1.jpg"></a>			</tr>
			</table>
			
		
               </tr>
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item">
		<center>
		<div style="width:620px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='insert.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; 
height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/cc.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">
User create account page</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px;
 height:12px;">
 <a href="admin.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
  <?php	
$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);
$UserName=$_POST['UserName'];
  $password=base64_encode($_POST['Password']);
    $Role=$_POST['Role'];
$sql="INSERT INTO useraccount(UserName,Password, Role)
VALUES('$UserName','$password','$Role')";

if (!mysql_query($sql,$p))
{
die('Error: ' . mysql_error());
}
else
echo "<h2>YOU Have Succesfully Create Account</h2>";
mysql_close($p);
?>
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor="#A9A9A9"align="center" style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="350px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green>(<font color=red>*</font>)Require</td></tr>
<tr><td><font color=red> * </font> <font color=black>user name :</font></td><td><input type="text" pattern="\D{3,5}/\d{3}/\d{2}" required x-moz-errormessage="Please Enter Letter Only Above 2 characters" title="Please Enter Letter Only Above 2 characters "  name="UserName"  value="" size='20%' id="txt_fname" placeholder='Fname'></input></td></tr>
<!--<tr><td><font color=red> * </font> <font color=black>Department  :</td><td><input type="text" pattern="/[^a-z\s\]/{5,100}" required x-moz-errormessage="Please Enter your Department correctly" title="Please Enter your Department correctly "   name="dep" value="" size='20%'  id="dep" placeholder='Department'/></td></tr>-->
<tr><td><font color=red> * </font><font color=black>Password :</td><td><input type="password" name="Password" value="" size='20%' id="pass" placeholder='Password' pattern="[a-zA-Z0-9]+" required x-moz-errormessage="Please Enter Students Login Password!!! " title="Please Enter Students Login Password!!!" placeholder='Password'></input></td></tr><br>
<tr><td><font color=red> * </font><font color=black>Role :</td><td><input type="text" pattern="\D{3,15}" required x-moz-errormessage="Please Enter Role Field!!!" title="Please Enter Role Field!!! " name="Role"   value="" size='20%' id="role" placeholder='Role' /></td></tr><!--mail==cyear-->
<tr><td colspan="2" align="center"><input style="background-color:#808000"type='submit' class="button_example" value='Save' name='submitMain' Onclick="return check(this.form);"/>
<input style="background-color:#808000"type='reset' class="button_example" value='clear'/></td></tr>
</form>
</center>

		</p>
		 </div>
		 </div>

		

	  
  <!--<ul class="style10" id="menu">
       
        <li class="style9 style14 style13">
		<img width="1200" height="100" src="Img/footer.jpg"/>
          
        </li>
  </ul>
   	-->
	  <h2>
	    <!--close sidebar_container-->
    </h2>
</div>
	<!--close sidebar-->
</body>
</html>
