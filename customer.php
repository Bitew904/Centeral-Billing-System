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
    <div id="header">
      <!--close banner-->
     <img width="1200" height="120" src="Img/am.jpg" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
     <ul id="menu">
	
      <li><a href="customer.php"><font color="white">HOME</font></a></li>	
	   <li><a href="customerregist.php"><font color="white">Register</font></a></li>	
	  <li><a href="login1.php"><font color="white">pay money</font></a></li>
	   <li><a href="viewreport.php""><b><font color="white">view report</font></b></a></li>
		  <li><a href="viewbill.php"><font color="white">view bill</font></a></li>
		
		  <li><a href="insertmoney.php"><font color="white">Add money</font></a></li>
	  <li><a href="change2.php"><b><font color="white">change password</font></b></a></li>
		  <li><a href="logout.php"><font color="white">logout</font></a></li>
       
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
            
			 

		<img width="215" height="180" src="Img/wt.jpg"/>
		<font size="5"color="green"><b></b></font>
		
			<table bgcolor="#4b474"align ="center" id="table2">
			<tr><td></td><td><img width="215" height="100"src="Img/11.jpg">
			</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td>
			
					
			</tr>
			<tr><td></td><td><img width="215" height="50"src="Img/8.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
			
			</tr>
			
			
			
			</table>
			
               </tr>
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item">
		<center>
		  <h1><font color="#9200ff"><b><img width="365" height="200" src="Img/se.jpg"/><img width="280" height="200" src="Img/cu.jpg"</h1> </b></font>
		  </center>
	      <p>&nbspIn  this  project,  we  propose  a  new  model for central  billing system  for  personal  bills  such  as  water bills,  telecom  bills and electric bills.  The  proposed system  consolidates  all  bills  for  one  user  so  the  user  will  not need to track and pay the bills individually.  Personal users can save a lot of time and effort on paying bills every month and will less likely forget to pay for the bills thus avoiding paying late payment fines.  Billing organizations such as utility companies, telecom companies and banks can benefit from this system by getting payments from users in time and sending out less physical mails for bills, which can save a lot of costs as well as save the resources.  The  proposed  system  can  also provide  functionalities  for  the  users  to  track  and  view  their expenses  back  in  time  and  in  different  aspects  online  from anywhere.  Expense reports can also be generated for all bills monthly, which is a very useful tool for users to know and plan their expenses.
We are trying to do the system which can solve all the problems in manual billing system. We have considered all the problems within the system to overcome it. We have realized there is no centralized billing system to pay all the bills of a customer. The main purposes of this project are aimed at developing a system which reduces work burden of the customer. Some times in manual process there is a possibility to get errors such as forget due date of payment.   </p>
<!--<font font size="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage Material Lend Student Information when they return the material they lend.</b>	</font><br><br>	  -->
		  
		
		  <br style="clear:both"/>
		  </div>
		 	  
	  </div>
	  
	  <div id=kk align:left="1200">
	  <tr><td><img width="270" height="500"src="Img/wtr.jpg"></a></td></tr>
	  
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
