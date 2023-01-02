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
 
</script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
	
	function isConfirmlog()
  {
   var r = confirm('Are you sure');
   if(!r)
   {
    alert(window.location='manageacc.php');
   }
   else
   {
   
   return false;
    
   }
  }
  </script>
  
  
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

	  <div class="sidebar_container" style="width: 205px">       
		<div class="auto-style1" style="width: 227px">
          <div class="sidebar_item">
<body bgcolor=#9494B8>
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr></body>
            
						
			<img width="215" height="200" src="Img/cd.jpg"/>
			<img width="215" height="50"src="Img/tle.jpg">			
			<img width="215" height="50"src="Img/wt.jpg">			
			
			<img width="215" height="50"src="Img/11.jpg">
			<img width="215" src="Img/feln-crowd_2.png"/>
			
			<hr></hr>
                     <marquee direction="up">
					 
                     <p>&nbsp;</p></marquee>
                     			 <p>control account</p>
                      </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
      
      </div>
	  <div id="content1" class="auto-style2" style="width: 559px">
        <div class="content_item" style="width: 546px">
		<center>
		 <!-- <h1><font color="#9200ff"><b><img width="965" height="150" src="Img/stlogo.png"/></h1> </b></font>-->
		  </center>
	      <form action="" method="post" style="width: 554px">
			<div id="view3">
			
					<table cellpadding="4" cellspacing="8"  align ="center"   id="table2" style="width: 890px" >
					
							<tr>
						
							<th id="table1"> User Name </th>
							<th> Password </th>
							<th > Role</th>
							<th > Status</th>
							<th> action </th>
							
							</tr>
							
							
						<tr id="table1" >
						<th> <hr> </th>
							<th> <hr></th>
							<th > <hr></th>
							<th> <hr> </th>
							<th > <hr></th>
							</tr>
					
<?php
	
$result = mysql_query("SELECT * FROM useraccount");
while($row = mysql_fetch_array($result))
  { 
						
   $status=$row['Status'];								
   $name=$row['UserName'];
   $pas= $row['Password'];
   $ro=$row['Role'];
?> 

<tr id="table1">
<td id="table1"><?php echo $name;?></td>
<td><?php echo $pas;?></td>
<td><?php echo $ro;?></td>
<td><?php echo $status;?></td>	
<td><?php
						if(($status)=='0')
						{
						?>
 <a href="status.php?status=<?php echo $row['UserName'];?>" onclick='isConfirmlog()'>
 <img src="Img/deactivate.png" id="view" width="16" height="16" alt="" onclick='isConfirmlog()'/>Deactivated </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
  <a href="status.php?status=<?php echo $row['UserName'];?>" onclick='isConfirmlog()'> 
  <img src="Img/activate.png" width="16" id="view" height="16" alt="" onclick='isConfirmlog()'/>Activated</a>
                        <?php
						}
						?>
						</td>	
				
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($conn);
?>

			</form>
			
		  </div>
	  </div>
	  
  <ul class="style10" id="menu">
       
        <li class="style9 style14 style13">
		<!--<img width="1200" height="100" src="Img/footer.jpg"/>-->
          
        </li>
  </ul>
   	</div>
	   </div>
 </div>
	<!--close sidebar-->
	<div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="login.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
</body>
</html>
