
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

  .auto-style1 {
	border-width: 0px;
}
.auto-style2 {
	border-style: solid;
	border-width: 1px;
}

  .auto-style3 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
}
.auto-style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: larger;
}

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
		  <li><a href="logout1.php"><font color="white">logout</font></a></li>
       
      </ul>
    </div><!--close menubar-->	
    
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
		<div style="width:948px; height:673px; position:relative; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); left: 0px; top: -23px; margin-left: auto; margin-right: auto; margin-bottom: 0;">
<form  method='POST' action='paycash.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; 
height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/birr.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px"> 
	 Search Customer payment !</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px;
 height:12px;">
 <a href="employee.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor="gray"align="left" style="margin-top:15px;box-shadow:1px 0px 0px black; background-color: #00FFCC; width: 906px; height: 454px;" class="auto-style1">
<!--<tr><td><font color=red> </font><font color=black>date<td><input type="date"  value="<?php echo $date?>"  required x-moz-errormessage="Please Enter The Year In Year/Month/Date Format " title="Please Enter The Year In Year/Month/Date Format  "  name="date"  id="date" size='20%'   placeholder='Y/M/D' value=""/></td></tr>-->
<tr><td style="width: 591px" class="auto-style2"><font color=black>
	Eneter Customer ID:
	<input type="text" name="search" value="" size='20%' id="txt_l" placeholder='CID' pattern="\d{2,10}" required x-moz-errormessage="Please Enter your fname " title="Please Enter your ID" style="width: 143px" >
	</input>&nbsp;&nbsp;&nbsp; </td>
	<td style="width: 1170px" class="auto-style2">Service Type:
	
	<select name="service_type"  id="sch"  required style="width: 95px">
<option value="">Service Type</option>
<option>waterbill</option>
<option>electricbill</option>
<option>telephonebill</option>
</select></td>
	<td style="width: 537px" class="auto-style3">
	<h6>
<input style="background-color:#808000; height: 47px; width: 87px;"type='submit' class="auto-style4" value="Search" name='submitMain' Onclick="return check(this.form);"/></h6>
	</td></tr>
	<tr><td>
	<img width="730" height="392" src="Img/bo.jpg"/>
	</td></tr>
</form>
</center></div>
		 </div
		 		 	   </div>
	  

   	
	
</div>
	<!--close sidebar-->
</body>
</html>
