

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

  </style>
</head>

<body>
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
	  
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container" style="width: 233px">       
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
			<tr><td></td><td><img width="215" height="50"src="Img/birr.jpg"></td>
			
					
			</tr>
			<tr><td></td><td><img width="215" height="50"src="Img/br.jpg"></td>
			
			
			</tr>
			
			
			<tr><td></td><td><img width="215" height="50"src="Img/mn.png"></td>
			
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
	 

	  <div id="content1">
        <div class="content_item">
		<center>
		<div style="width:820px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='insertpay.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; 
height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/Student.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">
Transfer money here !</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px;
 height:12px;">
 <a href="employee.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
 
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor="gray"align="center" style="border:1px solid black; margin-top:15px;box-shadow:10px 20px 10px black;" width="700" height="300px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green></td></tr>
<form action="data.php" method="post">
Enter current reading: <br/><input type="text" name="cu"/><br/>
Enter previous reading :<br/><input type="text" name="pu"/><br/>
<input type="submit" name="submit" value="submit"/>
</form>




<tr><td><font color=red> * </font><font color=black>first_name :</td><td><input type="text" name="fname" value="" size='20%' id="txt_l" placeholder='fname' pattern="\D{2,10}" required x-moz-errormessage="Please Enter Letter Only Above 2 characters " title="Please Enter Letter Only Above 2 characters" ></input></td></tr><br>
<tr><td><font color=red> * </font><font color=black>last_name :</td><td><input type="text" name="lname" value="" size='20%' id="txt_l" placeholder='Lname' pattern="\D{2,10}" required x-moz-errormessage="Please Enter Letter Only Above 2 characters " title="Please Enter Letter Only Above 2 characters" ></input></td></tr><br>
<tr><td><font color=red> * </font><font color=black>branch :</td><td><input type="text" name="branch" value="" size='20%' id="txt_l" placeholder='Lname' pattern="\D{2,10}" required x-moz-errormessage="Please Enter Letter Only Above 2 characters " title="Please Enter Letter Only Above 2 characters" ></input></td></tr><br>


<tr><td><font color=red> * </font> <font color=black>secretcode :</font></td><td><input type="text"  required x-moz-errormessage="Please Enter Letter Only Above 2 characters" title="Please Enter Letter Only Above 2 characters "  name="secretcode"  value="" size='20%' id="txt_fname" placeholder='secretecode'></input></td></tr>
<tr><td><font color=red> * </font> <font color=black>amountofbirr :</font></td><td><input type="text"  required x-moz-errormessage="Please Enter Letter Only Above 2 characters" title="Please Enter Letter Only Above 2 characters "  name="amountofbirr"  value="" size='20%' id="txt_fname" placeholder='birr'></input></td></tr>
<!--<tr><td><font color=red> * </font><font color=black>date<td><input type="date"  value="<?php echo $date?>"  required x-moz-errormessage="Please Enter The Year In Year/Month/Date Format " title="Please Enter The Year In Year/Month/Date Format  "  name="date"  id="date" size='20%'   placeholder='Y/M/D' value=""/></td></tr>
<!--<tr><td><font color=red> * </font><font color=black>report :</td><td><input type="text" pattern="\D{3,10000}" required x-moz-errormessage="Please Enter Role Field!!!" title="Please Enter Role Field!!! " name="report"   value="" size='20%' id="role" placeholder='Role' /></td></tr><!--mail==cyear-->
<tr><td colspan="2" align="center"><input style="background-color:#808000"type='submit' class="button_example" value='transfer' name='submitMain' Onclick="return check(this.form);"/>
<input style="background-color:#808000"type='reset' class="button_example" value='clear'/></td></tr>

</form>

</div>
		 	  
 </div>
 </div>
</div>

	
</div>
	<!--close sidebar-->
</body>
</html>
