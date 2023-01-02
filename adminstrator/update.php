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
    <div id="header">
      <!--close banner-->
     <img width="1200" height="120" src="Img/am.jpg" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
     <ul id="menu">
	  <li><a href="admin.php"><font color="white">HOME</font></a></li>
	  <li><a href="manageacc1.php""><b><font color="white">view account</font></b></a></li>
	   <li><a href="createaccount.php"><font color="white">Create User Account</font></a></li>
	  <li><a href="update.php""><b><font color="white">Update User Account</font></b></a></li>
	  <li><a href="delete.php""><b><font color="white">Delete User Account</font></b></a></li>
	   
	  <!-- <li><a href="manageacc1.php"><b><font color="white">generate report</font></b></a> </li>
	  <li><a href="studregist.php"><b><font color="white">Post advocator</font></b></a> </li>
	  <li><a href="offregist.php"><b><font color="white">view decision</font></b></a> </li>
	   <li><a href="offregist.php"><b><font color="white">view comment</font></b></a> </li>
	    <li><a href="update.php"><b><font color="white">search</font></b></a> </li>-->
		<li><a href="change.php""><b><img height="25" width="80" src="Img/changepassword.png"/></b></a></li>
	 	  <li><a href="logout.php"><img  height="30" src="Img/logout.jpg"></a></li>
       </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container">       
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
			<table bgcolor="#4b474"align ="center" id="table2">
			<tr><td></td><td><img width="215" height="100"src="Img/wt.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
			
			
			<tr><td></td><td><img width="215" height="50"src="Img/1.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item">
		<center>
		<div style="width:520px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='update.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<form  method='POST' action='update.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<form  method='POST' action='update.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/user.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">Account update page</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="admin.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
 
<table bgcolor="#A9A9A9"align="center" style="border:1px solid black; margin-top:15px;box-shadow:10px 20px 10px black;" width="400" height="300px">
<td colspan=3 align=right ><p style="margin-right:3%;"><font color=green>(<font color=red>*</font>)Require</td></tr><tr>
<tr><td><font color=red> * </font> <font color=black><b>UserName :</b></td><td><input type="text" pattern="\D{3,5}/\d{3}/\d{2}" required x-moz-errormessage="Please Enter  User Name!!!" title="Please Enter  User Name!!! "  name="un"  value="" size='20%' id="un" placeholder='User Name'></input></td></tr>
<tr><td colspan="2" align="center"><input style="background-color:#808000" type='submit' class="button_example" value='Search Account' name='display' Onclick="return check(this.form);"/>

<input style="background-color:#808000"type='reset' class="button_example" value='clear'/></td></tr>
	
</form>
</center>
 <?php
 $p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);
if(isset($_POST['display']))
{
$un=$_POST['un'];
$get= mysql_query("SELECT * FROM useraccount where UserName='$un' ")or die(mysql_error());
   $num = mysql_num_rows($get);
   if($num==0 && $un!=""){
  echo "The account does not exist"; 
  }
   for($i=0;$i<$num;$i++)
   {
	 $unn= mysql_result($get,$i,'UserName');
	  $pass= mysql_result($get,$i,'Password');
	  $role= mysql_result($get,$i,'Role');	  
	  $passde=base64_decode($pass);
  echo  "<form action='update.php' method='post' name='updte' id='up'>";
  echo "<table>";
  echo "<tr>";
  echo "<td>Username</td><td><input type='text' name='unn' id='unn' value='$unn'></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>password</td><td><input type='text' name='pass' id='pass' value='$pass'></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Role</td><td><input type='text' name='role' id='role' value='$role'></td>";
  echo "</tr>";  
  echo "<tr>";
  echo "<td colspan='2'><input type='submit' value='update' name='update' id='update'></td>";
  echo "</tr>";
  echo "</table>";
  echo "</form>";
  }}
 ?> 
 <?php
 $p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);
if(isset($_POST['update']))
  {
  $unnn=$_POST['unn'];
  $pass=$_POST['pass'];
  $role=$_POST['role'];  
  $passenc=base64_encode($pass);
  $update = mysql_query("update useraccount set UserName='{$unnn}',Password='{$passenc}',Role='{$role}' where UserName='{$unnn}'") or die(mysql_error());
  echo "<script>alert('update Successfully !!');</script>";
  
  }
  ?>
</fieldset>
</table>
</center>
		 </div>
		  <!--<br style="clear:both"/>-->
		  </div>
		  

		</p>
		 
<div id="tl">
<tr><td><img width="270" height="505"src="Img/cd.jpg"></a></td></tr>
		
		<center>	
		<img src="Img/cd.jpg"width="215" height="0" >
		
</div>
</div>
		
		 
	      
		 
		  <!--<br style="clear:both"/>-->
		  </div>
		  
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
