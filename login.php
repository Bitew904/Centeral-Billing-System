
<?php 
 session_start(); 
include('see.php'); 

 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } 
 
 ?>

<head>
  <title>Arbaminch Billing System</title>
  <link rel="icon" type="image/png" href="Img/BILL.png"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
.auto-style1 {
	margin-top: 0px;
}
.auto-style2 {
	margin-left: 0px;
}
.auto-style4 {
	border: 5px double red;
}
.auto-style5 {
	font-size: large;
}
.auto-style6 {
	font-size: large;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
</style>
  </head>

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

	<div id="menubar">
      <ul id="menu">
       <li><a href="home.php"><font color="white">Home</font></a></li>
       <li> <a href="cntct.php"><font color="white">Contact Us</font></a></li>
        <li><a href="login.php"> <font color="white">Login</font></a></li>
        
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content" style="height: 555px">		

	  <div class="sidebar_container" style="width: 233px; height: 535px">       
		<div class="sidebar">
          <div class="sidebar_item">
<body bgcolor=#9494B8>
<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
 <font  size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
</body>

		      <img width="250" height="272"src="Img/ad.jpg">
			   <img width="250" height="237"src="Img/emp.jpg" class="auto-style1">

       
               </tr>                 
             </table>
		   </div>
		  <!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
       
      </div>
	  <!--close sidebar_container	-->
		 
	  <div id="content1">
	 
        <div class="content_item">
		
		 <center>
  <form id="form1" name="login" method="POST" action="login.php" onsubmit='return formValidation()'>
 <form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">

<table bgcolor="gray"align="center" style="border-radius:50px;margin-top:15px;box-shadow:0px 0px 0px black;" width="550" height="350px" cellpadding="0" cellspacing="0" class="auto-style4">
<tr><td colspan=3 align="center" ><p style="margin-right:3%;"><font color=green></td></tr>
<tr colspan="3"><td colspan="3" style="height: 100px"><img width="500"height="100"src="Img/login.png"/></td></tr>

<tr>
	<td style="width: 131px; height: 49px;">
	</td>
	<td style="height: 49px; width: 26px;"></font></b>  
	<img src="img/usericon.jpg" height="33" width="55" class="auto-style2"></td>
	<td style="height: 49px">  
	<input type="text"   name="username" placeholder='User Name' pattern="\D{3,5}/\d{3}/\d{2}"  required x-moz-errormessage="To Login Please Enter User name" title="To Login Please Enter User name" style="height: 37px"></td></tr>
 <tr>
	 <td style="width: 131px" >
	 &nbsp;</td><td style="width: 26px"></font></b>
	 <img src="img/passicon.jpg" height="31" width="55" class="auto-style2"></td><td>
	 <input type="password" name="password" placeholder='password' pattern ="[a-zA-Z0-9]+"id="pass1" 
 required x-moz-errormessage="To Login Please Enter password" title="To Login Please Enter password" style="height: 31px" ></td></tr>
 
<tr><td style="width: 131px"><font color="red"></font> <b><font color="black"></font></b></td>
	<td width="280px" colspan="2">
<a href="forget.php">Forget Your Password? <img src="img/help.png"> </a></td> </tr>
 <tr><td style="width: 131px">&nbsp;</td><br><td colspan="2">
	 <input type="submit" style="background-color:#808000; height: 49px; width: 125px;" 
 name="submitlogin" " value="login" class="auto-style6" /></td></strong></fieldset> </tr>

							
</form>
</center>
 
 <?php
 
 if(isset($_POST['submitlogin']))
 {
   $user =$_POST['username'];
   $password=base64_encode($_POST['password']);
   // $role=$_POST['role'];
// $passde=base64_encode($password);
$query1 = "SELECT * FROM useraccount WHERE UserName = '$user' AND Password = '$password'AND Status='1' ;";
	$result=mysql_query($query1);
	if(!$result){
		die("Login Failed".mysql_error());
	}
	$rowCheck = mysql_num_rows($result);
	$row=mysql_fetch_array($result);
$role=$row['Role'];	
	//if($row['level']==1){
		
		if($role=='Administrator')
		{
			$_SESSION['validuser']=$user;
		 echo "<script>window.location='admin.php';</script>";
			
		}
		 if ($role=='employee')
		{
			$_SESSION['validuser']=$user;
		 echo "<script>window.location='employee.php';</script>";
			
		}
		 
		else {
		 echo '<div align="center"><strong><font color="#FF0000"> Incorrect Login Trial!!! Try Again Latter.  !!</font></Strong></div>';
		 echo'<meta content="2;login.php" http-equiv="refresh"/>';

			
		}
     
   } 

mysql_close($conn);
?>

</fieldset>
</table>
		  
		 
	  </div>
	  </div>
	  <div id="bb">
		  
		  <h1 class="style9"><b> vision of the organization: </h1> 
		  
	The vision of the organization is:-<br>
	Distributing pure, qualified, and guaranteed service to the society in well planned manner.<br>
	Adding new  resource d efficiently to minimize service shortage problem.<br>
	Planning to extend different branches of the organization in many areas<br>
	Creating awareness to the society about using service properly in each environment.</br>
    <h1 class="style2"><b> mission of the organization: </h1> 
	The mission of Arbaminch town centralized billing system is:-<br>
	Giving plan based  service to society according to our countryâ€™s development and transformation plan.<br>
	Providing service to each and every environment.<br>
	Distributing enough  service to each and every village.</br>


		  </div>

   	
	 </div>
	  <div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="login.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
</div>
	<!--close sidebar-->
</body>
</html>
 