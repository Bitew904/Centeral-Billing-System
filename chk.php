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
  <title>Aminch billing System</title>
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
<div id="header" style="width: 1197px; height: 149px;">
	<div id="title" style="left: -807px; top: 2px;width: 1197px; height: 159px;">
		<h1 style="height: 24px" class="auto-style1">&nbsp;</h1>
		<h1 style="height: 56px" class="auto-style1">&nbsp;<strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>የአርባ ምንጭ ከተማ ማዕከላዊ ደረሰኝ አገልግሎት</strong></h2>
    </div>
</div>

	<div id="menubar">
     <ul id="menu">
	
      <li ><a href="employee.php"><font color="white">HOME</font></a></li>
	  
		  <li><a href="logout.php"><font color="white">logout</font></a></li>
       
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container" style="width: 206px">       
		<div class="sidebar">
          <div class="sidebar_item" style="width: 132px">
<body bgcolor=#9494B8>
<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
 <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr></body>
            
					<img width="200" height="180" src="Img/slogo.png"/>
		<img width="200" height="80"src="Img/wt.jpg">
			<img width="200" height="50"src="Img/9.jpg">
			
			
			<img width="186" height="50"src="Img/11.jpg">
			
			
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
      
      </div>
	 

	  <div id="content1" style="width: 6px">
		  
		  </div>
		  
        <div class="content_item" style="width: 517px">
		<center>
		<div style="width:820px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='ch.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/user.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">CONGRATULATION FOR YOUR SUCCESS !</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="employee.php" title="Close"><img src="img/close_icon.gif"></a></div>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
 
<?php	
$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);
	$billNO=$_POST['billNO'];
	
$sql = mysql_query("SELECT * FROM payment where billNO='$billNO'");
 if($billNO==0 && $billNO!=""){
		echo "The account does not exist"; 
 }
else
{
  echo "<table>
<tr>
<th>bill number</th>
<th>amount of birr</th>
<th>service type</th>
<th>date</th>
</tr>";

while($row = mysql_fetch_array($sql))
{
	

echo "<tr>";
echo "<td>" . $row['billno'] . "</td>";
echo "<td>" . $row['amountofbirr'] . "</td>";
echo "<td>" . $row['servicetype'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}

echo "</table>";
}
mysql_close($p);




		
	
?>
 </div>
</form>
</center>
</fieldset>
</table>
		
		
		  </div>
		  
	  </div>
	  
</div>
	<!--close sidebar-->
</body>
</html>
