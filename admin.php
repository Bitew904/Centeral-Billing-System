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
 include("see.php");
?>



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

	  <div class="sidebar_container" style="width: 233px">       
		<div class="sidebar">
          <div class="sidebar_item" style="width: 227px">
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
			<tr><td></td><td><img width="215" height="100"src="Img/wt.jpg">	
			<tr><td></td><td><img width="215" height="50"src="Img/8.jpg">			
			<tr><td></td><td><img width="215" height="50"src="Img/1.jpg">
			          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item">
		<img class="mySlides" width="700" height="250" src="Img/i1.png">
		<img class="mySlides" width="700" height="250" src="Img/1.jpg" >
        <img class="mySlides" width="700" height="250" src="Img/arbaminch.jpg">
        <img class="mySlides" width="700" height="250" src="Img/arbaminch.png">
		<img class="mySlides" width="700" height="250" src="Img/122.jpg">
	     <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
		<center><h1><b> Background of the organization: </h1> 
		<font style="font-size:11px; width:300px;">
In  this  project,  we  propose  a  new  model for central  billing system  for  personal  bills  such  as  water bills,  telecom  bills and electric bills. 
The  proposed system  consolidates  all  bills  for  one  user  so  the  user  will  not need to track and pay the bills individually.
  Personal users can save a lot of time and effort on paying bills every month and will less likely forget to pay for the bills thus avoiding paying late payment fines. 
  Billing organizations such as utility companies, telecom companies and banks can benefit from this system by getting payments from users in time and sending out less physical mails for bills, which can save a lot of costs as well as save the resources. 
  The  proposed  system  can  also provide  functionalities  for  the  users  to  track  and  view  their expenses  back  in  time  and  in  different  aspects  online  from anywhere.  Expense reports can also be generated for all bills monthly, which is a very useful tool for users to know and plan their expenses.
</center>
		</font>
		 </div>
		 </div>
<div id="admin" class="auto-style1">
<table class="auto-style2">
<tr><td class="auto-style3">

  
  <h1 class="style9"><b> vision of the organization: </h1> 
		  
	<div class="auto-style4">
		  
	The vision of the organization is:-<br>
	Distributing pure, qualified, and guaranteed service to the society in well planned manner.<br>
	Adding new  resource d efficiently to minimize service shortage problem.<br>
	Planning to extend different branches of the organization in many areas<br>
	Creating awareness to the society about using service properly in each environment.</br>
	</div>
	</td></tr>
	<tr><td class="auto-style5">
    	<h1 class="auto-style6"><strong>mission of the organization:</strong>
		</h1>
	The mission of Arbaminch town centralized billing system is:-<br>Giving plan based  service to society according to our countrs development and transformation plan.<br>Providing service to each and every environment.<br>Distributing enough  service to each and every village.</br>
	</td></tr>
<br>
</table>	
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
	  <div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="login.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
	<!--close sidebar-->
</body>
</html>
