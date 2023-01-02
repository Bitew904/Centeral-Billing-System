
<?php  
include('see.php'); 
 session_start();
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } 
 
 ?>

<head>
  <title>ARBAMINCH Billing SYSTEM</title>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

<body>
  <div id="main">
   <div id="header" style="width: 1197px; height: 109px;">
	<div id="logo" style="width: 269px; height: 99px;">
	
		<img alt="LOGO" height="105" src="BILL.png" width="269" class="auto-style5" /></div>
	<div id="title" style="left: -564px; top: 1px; height: 120px">
		<h1><strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>&#4840;&#4768;&#4653;&#4707; &#4637;&#4757;&#4909; &#4776;&#4720;&#4635; &#4635;&#4821;&#4776;&#4619;&#4810; &#4848;&#4648;&#4656;&#4877;&#4765; &#4768;&#4872;&#4621;&#4877;&#4622;&#4725;</strong></h2>
    </div>
</div>

	<div id="menubar">
      <ul id="menu">
       <li><a href="employee.php"><font color="white">Home</font></a></li>
      
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container" style="width: 234px; height: 512px">       
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

			 <img width="215" src="Img/mo.jpg" color="red"/>
			   	<font size="5"color="red"  width="200"><b></b></font>
		
			<table bgcolor="white" width="215" align ="center" id="table2">
			<tr><td><img width="215" height="50"src="Img/BILL.png"></a></td></tr>
			<tr><td><img width="215" height="50"src="Img/mn.png"></a></td></tr>
			<tr><td><img width="215" height="50"src="Img/birr.jpg"></a></td></tr>
			</table>

			<img width="215" height="110"src="Img/br.jpg"/>
       
               </tr>                 
             </table>
		   </div>
		  <!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
       
      </div>
	  <!--close sidebar_container-->	
		 
	  <div id="content1">
        <div class="content_item">
		<center>
  <form id="form1" name="login1" method="POST" action="login1.php" onsubmit='return formValidation()'>
<table bgcolor="gray"align="top" style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:0px 0px 0px black;" width="500" height="350px">
<tr><td colspan=2 align=right >
	<tr colspan="3"><td colspan="2"><img width="500"height="134"src="Img/log.jpg"/></td></tr> 

<tr><td><b><font color="black">User Name:</font></b></td><td>  <input type="text"   name="username" 
pattern="\D{3,5}/\d{3}/\d{2}"  required x-moz-errormessage="To Login Please Enter User name" 
title="To Login Please Enter User name"></td></tr>
 <tr><td > <b><font color="black">
 Password:</font></b></td><td><input type="password" name="password" pattern ="[a-zA-Z0-9]+"id="pass1" 
 required x-moz-errormessage="To Login Please Enter password" title="To Login Please Enter password" >
 </td></tr>
<!--<tr><td><font color="red"></font> <b><font color="black"></font></b></td><td width="280px">
<a href="forget.php">Forget Your Password? <img src="img/help.png"> </a></td> </tr>-->
 <tr><td>&nbsp;</td><br><td><input type="submit" style="background-color:#808000" 
 name="submitlogin" " value="login" /></td></fieldset> </tr>

							
</form>
</center>
 
 <?php
 
 if(isset($_POST['submitlogin']))
 {
   $user =$_POST['username'];
   $password=base64_encode($_POST['password']);
   // $role=$_POST['role'];
// $passde=base64_encode($password);
$query1 = "SELECT * FROM useraccount WHERE UserName = '$user' AND Password = '$password'AND Status='1';";
	$result=mysql_query($query1);
	if(!$result){
		die("Login Failed".mysql_error());
	}
	$rowCheck = mysql_num_rows($result);
	$row=mysql_fetch_array($result);

			$_SESSION['validuser']=$user;
		 echo "<script>window.location='pay.php';</script>";
		
     
   } 

mysql_close($conn);
?>
</fieldset>
</table>
		  
		  <form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
 
  <br><br><br><br><br><br>
		  
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
	Giving plan based  service to society according to our country’s development and transformation plan.<br>
	Providing service to each and every environment.<br>
	Distributing enough  service to each and every village.</br>

<font size="4"color="green">
<p><p>
<p> <p>
<p><p>  
<p><p>
<p><p>
<p><p
		  </div>
	  </div>
	 
  <ul class="style10" id="menu">
       
        <li class="style9 style14 style13">
		
          
        </li>
  </ul>
   	
	 <div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="login.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
	<!--close sidebar-->
</body>
</html>
 