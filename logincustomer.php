
<?php  
include('see.php'); 
 session_start();
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } 
 
 ?>

<head>
  <title>ARBAMINCH TOWN CENTRALIZED BILLING SYSTEM</title>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
     <img width="1200" height="120" src="Img/bbX.jpg" alt="image1" width="101" height="118"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
       <li><a href="home.php"><font color="white">Home</font></a></li>
       <li> <a href="cntct.php"><font color="white">Contact Us</font></a></li>
        <li class="current"><a href="login.php"> <font color="white">Login</font></a></li>
        
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container">       
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

			 <img width="215" height="150" src="Img/gg.jpg" color="red"/>
			   	<font size="5"color="red"  width="200"><b></b></font>
		
			<table bgcolor="white" width="215" align ="center" id="table2">
			<tr><td><img width="200" height="80"src="Img/ad.jpg"></a></td></tr>
			<tr><td><img width="200" height="80"src="Img/emp.jpg"></a></td></tr>
			<tr><td><img width="200" height="80"src="Img/cu.jpg"></a></td></tr>
			</table>

			<!--<img width="215" height="110"src="Img/b.jpg"/>-->
       
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
  <form id="form1" name="logincustomer" method="POST" action="logincustomer.php" onsubmit='return formValidation()'>
 <form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
 
  <br><br><br><br><br><br>
<table  bgcolor="gray"align="center" style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="300px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green></td></tr>
<tr colspan="3"><td colspan="3"><img width="400"height="100"src="Img/t.jpg"/></td></tr>

<tr><td><b><font color="black">User Name:</font></b></td><td>  <input type="text"   name="username" 
pattern="\D{3,5}/\d{3}/\d{2}"  required x-moz-errormessage="To Login Please Enter User name" 
title="To Login Please Enter User name"></td></tr>
 <tr><td ><font color="red"></font> <b><font color="black">
 Password:</font></b></td><td><input type="password" name="password" pattern ="[a-zA-Z0-9]+"id="pass1" 
 required x-moz-errormessage="To Login Please Enter password" title="To Login Please Enter password" >
 </td></tr>
 <tr><td><font color=red> * </font><b><font color=black>Role: </td></b><td> <select name="role"  id="role"  required>
<option value=""> enter role of user</option>
<option>Administrator</option>
<option>employee</option>
<option>customer </option>
</select></td></tr>
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
   $password=$_POST['password'];
    $role=$_POST['role'];
 $passdec=base64_encode($password);
$query1 = "SELECT * FROM customer WHERE UserName = '$user' AND Password = '$password'AND Role='$role' ;";
	$result=mysql_query($query1);
	if(!$result){
		die("Login Failed".mysql_error());
	}
	$rowCheck = mysql_num_rows($result);
	$row=mysql_fetch_array($result);
$role=$row['Role'];	
	//if($row['level']==1){
		
		/*if($role=='Administrator')
		{
			$_SESSION['validuser']=$user;
		 echo "<script>window.location='admin.php';</script>";
			
		}
		 if ($role=='employee')
		{
			$_SESSION['validuser']=$user;
		 echo "<script>window.location='employee.php';</script>";
			
		}
		 */
		if ($role=='customer')
		{
			$_SESSION['validuser']=$user;
		 echo "<script>window.location='customer.php';</script>";
			
		}
		else {
		 echo '<div align="center"><strong><font color="#FF0000"> Incorrect Login Trial!!! Try Again Latter.  !!</font></Strong></div>';
		 echo'<meta content="2;logincustomer.php" http-equiv="refresh"/>';

			
		}
     
   } 

mysql_close($conn);
?>
</fieldset>
</table>
		  
		  </div>
		 
	  </div>
	  </div>
	  
  <ul class="style10" id="menu">
       
        <li class="style9 style14 style13">
		
          
        </li>
  </ul>
   	
	  <h2>
	    <!--close sidebar_container-->
    </h2>
</div>
	<!--close sidebar-->
</body>
</html>
 