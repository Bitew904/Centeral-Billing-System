
<?php   
 session_start();
 include("see.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Arbaminch Town centralized Billing system</title>
  <link rel="icon" type="image/png" href="Img/BILL.png"/>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
 
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
        <li ><a href="home.php"><font color="white">Home</font></a></li>
		<!--<li><a href="cntct.php"><font color="white">Contact Us</font></a></li>
        <li class="current"><a href="forget.php"> <font color="white">Recover Password</font></a></li>
		<li><a href="login.php"><font color="white">Login</font></a></li>-->
		
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container" style="width: 193px">       
		<div class="sidebar">
          <div class="sidebar_item">
<body bgcolor=#9494B8>
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr>
</body>
            
			 
			 <img width="215" height="20" src="Img/cd.jpg"/><br>
			 <hr></hr><br>
			 <hr></hr>
			 <img width="215" src="Img/cd.jpg"/><br>
			 <hr></hr><br>
			 <hr></hr>
			 <img width="215" src="Img/8.jpg"/>
			  
			 <img width="215" src="Img/feln-crowd_2.png"/>
      
                     <marquee direction="up">
					 
                     <p>&nbsp;</p></marquee></th>
               </tr>
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		
        
      </div>
	 
	  <div id="content1">
        <div class="content_item">
		<form id="form1" name="login" method="POST" action="forget.php" onsubmit='return formValidation()'>
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="40" height="20" src="Img/for.jpg"/>&nbsp&nbsp<strong><font color="white" size="2px">
 <b>Recover Forget Password</b></font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="login.php" title="Close"><img src="img/close_icon.gif"></a></div>
  
 </div>
 <?php
 if(isset($_POST['submitlogin']))
 {
   $user=$_POST['username'];
$selc = mysql_query("SELECT * FROM useraccount  where UserName='$user' ");
$num1 = mysql_num_rows($selc);
for($i=0;$i<$num1;$i++)
   {
	  
		$pass= mysql_result($selc,$i,'Password');
		$role= mysql_result($selc,$i,'Role');
   }
   if($role=="employee"){
 $recop=base64_decode($pass);
echo'<strong><font color="green">Hello Dear<br></font></Strong>'.$user."<br/>";
  echo'<strong><font color="green">Your Password is</font></Strong>'.$recop;
   echo'<meta content="5;forget.php" http-equiv="refresh"/>';
	   

   }
   if($role=="Administrator")
   {
	   echo'<strong><font color="green">You Are not a employee!!!</font></Strong>';
	   echo'<meta content="1;forget.php" http-equiv="refresh"/>';
   }
  /* else
   {
	   echo'<strong><font color="green">Your Trial is wrong!!!</font></Strong>';
	   echo'<meta content="1;forget.php" http-equiv="refresh"/>'; 
   }
    */
}
mysql_close($conn);
?>
		  <p align="center"><img src="img/login_icon1.gif" title="AM centralized billing Login" width="80"></p>
		  <fieldset>
<legend><b><font color="green"><b>Enter Your User Name To Recover Your Forget Password!!!</b></font></b></legend>
  <table width="286" valign="top" align="center" border="0">
  

  <tr>

	 <td  width="220px"><font color="#9200ff">@</font><b> Username:</b></td><td>
		   <input type="text"   name="username" pattern="^\D{3,5}/\d{3}/\d{2}"  required x-moz-errormessage="To Recover Forget Password Please Enter Username" ></td>
		 
	     </tr>
		 
  <tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" name="submitlogin" " value="Recover Password" /></td></fieldset>
  </tr>
</table> 
  </form>
		
	
		  </div>
		  
		  	  
	  </div>
	  
  <!--<ul class="style10" id="menu">
       
        <li class="style9 style14 style13">
		<img width="1200" height="100" src="Img/.jpg"/>
          
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
