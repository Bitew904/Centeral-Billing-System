
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
	  <li><a href="report.php"><font color="white">Generate report</font></a></li>
		  <li><a href="logout.php"><font color="white">logout</font></a></li>
       
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container" style="width: 204px">       
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
					 
                     <p>&nbsp;</p></marquee></th>
               </tr>
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item" style="height: 839px; width: 725px">
		<?php
include("see.php");


?>
		<form  method='POST' action='rep.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
		<h3>To Generate Report Select Servie Type</h3>
	<table class="reptab" scrolling="auto">
      <tr><td>Servie type: 
	  <select name="service"  id="servicetype" required>
          <option value="">servicetype</option>
           <option>water bill</option>
           <option>electric bill</option>
          <option>telecome bill</option>
		</select></td>
		 <td><input style="background-color:#808000"type='submit' class="button_example" value='report' name='submitMain' Onclick="return check(this.form);"/></td></tr>
<th>bill number</th>
<th>date</th>
<th>amountofbirr</th>
<th>service_type</th>

</tr>

<?php
$service =$_POST['service'];
$result = mysql_query("SELECT * FROM payment where servicetype='$service'");

while($row = mysql_fetch_array($result))
  {   
   $bllno=$row['billno'];										
   $date=$row['date'];								
   $amountofbirr=$row['amountofbirr'];
   $servicetype= $row['servicetype'];
 
?>
<iframe src="repv.php" height="500px" width="840px" style="border-style:none;" marginwidth="" align="top" scrolling="auto">
<tr>
<td><?php echo $bllno; ?>  </td>
<td><?php echo $date; ?>  </td>
<td><?php echo $amountofbirr; ?></td>
<td><?php echo $servicetype; ?></td>


</tr>
</iframe>
<?php
 } 
print( "</table>");
mysql_close($conn);
?>


</form>
</center>
 </p>
		 </div>
		 </div>
		 <div id="emp">

		 
		  </center>
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
