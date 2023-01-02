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
    <div id="header">
      <!--close banner-->
     <img width="1200" height="120" src="Img/am.jpg" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
     <ul id="menu">
	  <li><a href="admin.php"><font color="white">HOME</font></a></li>
	  <li><a href="manageacc1.php""><b><font color="white"> control account</font></b></a></li>
	   <li><a href="createaccount.php"><font color="white">Create Account</font></a></li>
	  <li><a href="update.php""><b><font color="white">Update Account</font></b></a></li>
	  <li><a href="delete.php""><b><font color="white">Delete Account</font></b></a></li>
	   
		<li><a href="change.php""><b><font color="white">change password</font></b></a></li>
	 	  <li><a href="logout.php"><b><font color="white">logout</font></a></li>
       </ul>
    </div><!--close menubar-->	
    
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
		<img class="mySlides" width="700" height="250" src="Img/amu.png">
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
		<p><center><h1 class="style9"><b> Background of the organization: </h1> 
In  this  project,  we  propose  a  new  model for central  billing system  for  personal  bills  such  as  water bills,  telecom  bills and electric bills. 
The  proposed system  consolidates  all  bills  for  one  user  so  the  user  will  not need to track and pay the bills individually.
  Personal users can save a lot of time and effort on paying bills every month and will less likely forget to pay for the bills thus avoiding paying late payment fines. 
  Billing organizations such as utility companies, telecom companies and banks can benefit from this system by getting payments from users in time and sending out less physical mails for bills, which can save a lot of costs as well as save the resources. 
  The  proposed  system  can  also provide  functionalities  for  the  users  to  track  and  view  their expenses  back  in  time  and  in  different  aspects  online  from anywhere.  Expense reports can also be generated for all bills monthly, which is a very useful tool for users to know and plan their expenses.
</center>
		</p>
		 </div>
		 </div>
<div id="tl">
<tr><td><img width="270" height="505"src="Img/empl.jpg"></a></td></tr>
		
		<center>	
		<img src="Img/gg.jpg"width="215" height="0" >
		
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
