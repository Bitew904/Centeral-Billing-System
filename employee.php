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
	
		<img alt="LOGO" height="105" src="BILL.png" width="236" class="auto-style5" /></div>
	<div id="title" style="left: -564px; top: 1px; height: 120px">
		<h1><strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>የአርባ ምንጭ ከተማ ማዕከላዊ ደረሰኝ አገልግሎት</strong></h2>
    </div>
</div>
  <?php   
 include("zheader.php");
?>   
<div id="site_content">		

	  <div class="sidebar_container" style="width: 222px">       
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
		
			<table bgcolor="#4b474"align ="center" id="table2" style="width: 218px; height: 138px">
			<tr><td style="width: 258px"><img width="200" height="100"src="Img/11.jpg"></td>
			
					
			</tr>
			<tr><td style="width: 258px"><img width="200" height="50"src="Img/9.jpg"></td>
			
			
			</tr>
			
			
			
			</table>
			<br><br>
			<hr><hr>
			 
			<hr></hr>
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
        <img class="mySlides" width="700" height="250" src="Img/i1.png">
		<img class="mySlides" width="700" height="250" src="Img/zebra.jpg">
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
	
	      <p><center>Arbaminch town is found 505 kilometers far from the capital city of Ethiopia. It is one of the towns in SNNP having different culture and is center of tourism in the region and has its own administration structure to organize, control and manage the local communities. In Arbaminch town there are governmental and nongovernmental organizations which facilitate the development of the town and provide services to the community. All these organization uses manual type of billing system. The Ethiotelecom is one of the governmental organizations. It was established after the town was established, Which located at the back of Nechisar campus .It provides more services such as voice single billing, voice over internet protocol, internet broadband connection ,business data service and line share for the community. The organization has smooth relation with the other organization especially electric corporation in order to get electrical power .The organization controlled by central administrator of Ethiotelecom. The second one is electric power corporation which located near sikela having its own manager. The third one is water service institute which gives water service for the town. 
   	Currently the organization information system process tasks in the form of document based applications or traditional file systems. The current system of recording of bill system, financial system, technical system and human resource management information has been formatted in manual based.
	</center>
 </p>
		 </div>
		 </div>
		 <div id="emp">
		 
		  </div>
		  &nbsp;<img width="270" height="200"src="Img/emp.jpg">
          
		 <marquee direction="down"width="270"bgcolor="white" behavior="slide"><h3><font color="black"><b>So far we were intended in analyzing the existing system of the Arbaminch town All billing system (water, electric and telecommunication services) for proposing our new system that solves the difficulties related to the existing system. Still the existing system is running almost manually especially for water and electric services, hence it is highly exposed to the manual related problems, like misplacement, duplication and corruption/loss of files, high storage space requirement, unshared nature of files, huge time consumption to manipulate and generally it degrades the effectiveness and efficiency of the system as a whole.</h1> </b></font></marquee></div>
	  

   	
	
	<div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="login.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
	<!--close sidebar-->
</body>
</html>
