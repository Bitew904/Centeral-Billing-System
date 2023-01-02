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
<div id="header" style="width: 1197px; height: 134px;">
	<div id="title" style="left: -807px; top: -34px; width: 1197px; height: 181px;">
		<h1 style="height: 24px" class="auto-style1">&nbsp;</h1>
		<h1 style="height: 56px" class="auto-style1">&nbsp;<strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>የአርባ ምንጭ ከተማ ማዕከላዊ ደረሰኝ አገልግሎት</strong></h2>
    </div>
</div>
  <?php   
 include("yheader.php");
?>

<div id="site_content">		

	  <div class="sidebar_container" style="width: 242px">       
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
			<tr><td></td><td><img width="215" height="100"src="Img/wt.jpg">					
			</tr>
			<tr><td></td><td><img width="215" height="50"src="Img/8.jpg">			
			</tr>
			
			
			<tr><td></td><td><img width="215" height="50"src="Img/1.jpg">			</tr>
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
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:px; -webkit-box-shadow:0 0 1px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10px; color:#F00000;">
<form  method='POST' action='delete.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/user.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">Account delete page</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="admin.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
 <br></br>
<table bgcolor="#A9A9A9" align="center" style="border:1px solid black; border-radius:0px;margin-top:1px;box-shadow:0px 0px 0px black;" width="500" height="350px">
<td colspan=3 align=right ><p style="margin-right:1%;"><font color=green></td></tr><tr>
<tr><td>
<font color=red> * </font> <font color=black><b>UserName :</b></td><td><input type="text" pattern="\D{3,5}/\d{3}/\d{2}" required x-moz-errormessage="Please Enter your User Name!!!" title="Please Enter your User Name!!! "  name="un"  value="" size='20%' id="un" placeholder='User Name'></input></td></tr>
<tr><td colspan="2" align="center"><input style="background-color:#808000"type='submit' class="button_example" value='Delete' name='delete' Onclick="return check(this.form);"/>

<input style="background-color:#808000"type='reset' class="button_example" value='clear'/></td></tr>
	
</form>
</center>
 <?php
if(isset($_POST['delete']))
{
$username = $_POST['un'];
$query="select * from useraccount where UserName='{$username}'";
$result=mysql_query($query);
if(!$result){
die("Query Failed".mysql_error());
echo'<meta content="2;delete.php" http-equiv="refresh"/>';
										
}
$count=mysql_num_rows($result);
if($count==0)
{
echo"User Account does not exist";
}
if($count>0)
{
$del = mysql_query("DELETE from useraccount WHERE  UserName='{$username}'") or die(mysql_error());
echo"You Have Deleted One User Account Information!!!";
echo'<meta content="2;delete.php" http-equiv="refresh"/>';

}
}
?>
</fieldset>
</table>
		 
</center>
</div>
		  </div>
		</p>
		 
<div id="tl">
<tr><td><img width="260" height="505"src="Img/empl.jpg"></a></td></tr>
		
	
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
