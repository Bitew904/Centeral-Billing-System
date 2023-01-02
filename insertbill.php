
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
	
      <li><a href="employee.php"><font color="white">HOME</font></a></li>
	 
	  <li><a href="ch.php"><font color="white">check payment</font></a></li>
	  <li><a href="report.php"><font color="white">Generate report</font></a></li>
	   <li><a href="preparebill.php"><font color="white">preparebill</font></a></li>
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
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr>
</body>
            
			 <!--<ul id="menu">
			 <ul id="menu">-->

		<img width="215" height="150" src="Img/wt.jpg"/>
		&nbsp; &nbsp;&nbsp;	
		
			<table bgcolor="#4b474"align ="center" id="table2">
			<tr><td></td><td><img width="200" height="100"src="Img/11.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td>
			
					
			</tr>
			<tr><td></td><td><img width="200" height="50"src="Img/9.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
			
			</tr>
			
			
			
			</table>
			<br><br>
			<hr><hr>
			 
			<hr></hr>
                     <marquee direction="up">
					 
                     <p>&nbsp;</p>
                     </marquee></th>
               </tr>
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item">
	<div style="width:820px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='preparebill1.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/cc.jpg"/>&nbsp,&nbsp,<strong><font color="white" size="2px">Prepare bill page</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="employee.php" title="Close"><img src="img/close_icon.gif"></a></div>
 
 
 </div>
<?php	

$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);

$sql="INSERT INTO preparebill(date,billNO,amountofbirr,servicetype,username)
VALUES(curdate(),'$_POST[billNO]','$_POST[amountofbirr]','$_POST[servicetype]','$_POST[username]')";
if (!mysql_query($sql,$p))
{
die('Error: ' . mysql_error());
}
else
echo "<h1>YOU HAVE SECCESFULLY prepared your bill</h1>";
mysql_close($p);
?>
<table bgcolor="#A9A9A9"align="center" style="border:1px solid black; margin-top:15px;box-shadow:10px 20px 10px black;" width="650" height="350px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green></td></tr>
<!--<tr><td><font color=red> * </font><font color=black>date<td><input type="date"  value="<?php echo $date?>"  required x-moz-errormessage="Please Enter The Year In Year/Month/Date Format " title="Please Enter The Year In Year/Month/Date Format  "  name="date"  id="date" size='20%'   placeholder='Y/M/D' value=""/></td></tr>-->
<tr><td><font color=red> * </font><font color=black>billNO :</td><td><input type="text" name="billNO" value="" size='20%' id="txt_l" placeholder='billno' pattern ="[0-9]+" required x-moz-errormessage="Please Enter your bill no " title="Please Enter your bill no" ></input></td></tr><br>
<tr><td><font color=red> * </font><font color=black>amountofbirr :</td><td><input type="text" name="amountofbirr" value="" size='20%' id="txt_l" placeholder='amountofbirr'pattern ="[0-9]+" required x-moz-errormessage="please enter your amount of birr" title="please enter your amount of birr" ></input></td></tr><br>
<tr><td><font color=red> * </font><font color=black>username :</td><td><input type="text" name="username" value="" size='20%' id="txt_l" placeholder='username' pattern="\D{2,10}" required x-moz-errormessage="Please Enter your fname " title="Please Enter your username" ></input></td></tr><br>
<tr><td><font color=red> * </font><font color=black>servicetype:</td><td>
<select name="servicetype" required pattern="\D{2,100}" required x-moz-errormessage="Please Enter service type  " title="Please Enter Service type  " >
<option value=""></option>
<option>water bill</option>
<option>electric bill</option>
<option>telephone bill</option>

</select>
 </td></tr>
<tr><td colspan="2" align="center"><input style="background-color:#808000"type='submit' class="button_example" value='Save' name='submitMain' Onclick="return check(this.form);"/>
<input style="background-color:#808000"type='reset' class="button_example" value='clear'/></td></tr>
</form>
</center>
	      
	
 </p>
		 </div>
		 </div>


		  </div>
		 	   </div>
	  </div>
	  
  <!--<ul class="style10" id="menu">
        <li class="style9 style14 style13">
		<img width="1200" height="100" src="Img/footer.jpg"/>
          
        </li>
  </ul>-->
   	
	  <h2>
	    <!--close sidebar_container-->
    </h2>
</div>
	<!--close sidebar-->
</body>
</html>
