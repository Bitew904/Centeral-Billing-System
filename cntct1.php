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
	text-align: left;
}

  .auto-style2 {
	text-align: center;
}

  .auto-style3 {
	border-style: solid;
	border-width: 1px;
	padding: 1px 4px;
}

  </style>
</head>

<body>
  <div id="main" class="auto-style3">
  <div id="header" style="width: 1197px; height: 149px;">
	<div id="title" style="left: -807px; top: 2px;width: 1197px; height: 159px;">
		<h1 style="height: 24px" class="auto-style1">&nbsp;</h1>
		<h1 style="height: 56px" class="auto-style1">&nbsp;<strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>የአርባ ምንጭ ከተማ ማዕከላዊ ደረሰኝ አገልግሎት</strong></h2>
    </div>
</div> </div>
	<div id="menubar">
      <ul id="menu">
       <li><a href="home.php"><font color="white">Home</font></a></li>
       <li> <a href="cntct.php"><font color="white">Contact Us</font></a></li>
       <li><a href="login.php"><font color="white">Login</font></a></li>
		
		
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content" style="height: 654px">		

	  <div class="sidebar_container" style="width: 248px">       
		<div class="sidebar">
          <div class="sidebar_item" style="width: 242px; height: 667px">
<body bgcolor=#9494B8>
<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr class="auto-style2"><hr>
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
	
	 	  <div id="content1" style="height: 748px">
        <div class="content_item" style="height: 826px; width: 797px">
		  <h1 class="style9"><b>For additional Information please contact us through : </h1> 
		  
<form  method='POST' action='cntct1.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
    <b>
 <div style="float:Left; margin-left:100px; background-color:#00FFFF; width:701px;  padding:45px; border-radius:10px;
 height:500px;" class="auto-style1">
 
 	<br />
	 <br />
	 <br />
 &nbsp;Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name">
  <br><br>
  E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email">
  <br><br>
  Address:&nbsp;&nbsp;&nbsp; <input type="text" name=" address">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  
  <br><br>
  
  <br><br>
  <input type="submit" name="submit" value="Submit"></td></tr>
  <?php	
$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);

$sql="INSERT INTO contact(name,email,address,comment,date)
VALUES('$_POST[name]','$_POST[email]','$_POST[address]','$_POST[comment]',curdate())";

if (!mysql_query($sql,$p))
{
die('Error: ' . mysql_error());
}
else
mysql_close($p);
?>
		 </div>

      </div>
< </div>
 </div>  
 <div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="developer.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
 </div>
</body>
</html>
