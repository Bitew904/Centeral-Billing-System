<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title> Arbaminch town centralized system</title>
  <link rel="icon" type="image/png" href="Img/dbui.png"/>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">

  .auto-style1 {
	  margin-left: 0px;
  }

  .auto-style2 {
	width: 700px;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-right: 0px;
}
.auto-style3 {
	margin-top: 0px;
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
       <li><a href="admin.php"><font color="white">Home</font></a></li>
 
		
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container" style="width: 248px">       
		<div class="sidebar">
          <div class="sidebar_item" style="width: 241px; height: 861px">
<body bgcolor=#9494B8>
<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr>
</body>
            
			 <img width="215" src="Img/contact us.jpg"/>
			   &nbsp; &nbsp;&nbsp;	<font size="3"color="green"><b>Related Links</b></font>
		
			<table bgcolor="#4b474" width="200"align ="center" id="table2">
			<tr><td></td><td><a href="http://www.facebook.com"><img width="200" height="50"src="Img/fb.jpg"></a></td>
			
			<tr><td></td><td><a href="http://www.google.com"><img width="200" height="50"src="Img/google-map.png"></a></td>
		</tr>
			
			<tr><td></td><td><a href="http://wwww.youtube.com"><img width="200" height="50"src="Img/youtube.png"></a></td>
			</table>
		
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        
      </div>
	  <!--close sidebar_container-->	
	
	 	  <div id="content1" style="height: 602px; width: 675px;">
        <div class="auto-style2" style="height: 577px; width: 670px">
		  <h1 class="style9"><b>For additional Information please contact us through : </h1> 
	<form  method='POST' action='reply.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">	  
 <div style="float:Left; margin-left:50px; background-color:#66FFFF; width:516px;  text-align:left; padding:45px; border-radius:10px;
 height:386px;" class="auto-style1">
 
 	<br />
	
  
		
<?php	
$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);

$sql="INSERT INTO replies(email,replies)
VALUES('$_POST[email]','$_POST[comment]')";

if (!mysql_query($sql,$p))
{
die('Error: ' . mysql_error());
}
else
mysql_close($p);

?>
 </div>
</form>
    <b>
 	
      </div>
	  
< </div>
<div id="bb">
		

		  <img alt="" height="352" src="Img/zebra.jpg" width="270" />
		  <img alt="" height="243" src="Img/w3.jpg" width="271" class="auto-style3" />
		  </div>
	  <ul class="style10" id="menu">
       
        <li class="style9 style14 style13"></li>
 </ul>
 </div>  
 <div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="developer.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
 </div>
</body>
</html>
