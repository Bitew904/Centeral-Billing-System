<?php
include("see.php");
?>
<div id="content1">
        <div class="content_item">
		<center>
		<div style="width:820px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='viewreport.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/Student.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">CONGRATULATION FOR YOUR SUCCESS !</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="customer.php" title="Close"><img src="img/close_icon.gif"></a></div>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<table cellpadding="4" cellspacing="8"  align ="center" style="width: 890px" class="auto-style1" >
					
							<tr>
						
							<th class="auto-style2"> fName </th>
							<th class="auto-style2"> lname</th>
							<th class="auto-style2" > amoountof bir</th>
							<th class="auto-style2" > service type</th>
							<th class="auto-style2" > date</th>
							</tr>				
						<?php

$result = mysql_query("SELECT * FROM payment");
while($row = mysql_fetch_array($result))
  { 
						
   $fname=$row['fname'];								
   $lname=$row['lname'];
   $amoountof= $row['amountofbirr'];
   $date= $row['date'];
   $service=$row['servicetype'];
?> 

<tr id="table1">
<td class="auto-style2"><?php echo $fname;?></td>
<td class="auto-style2"><?php echo $lname;?></td>
<td class="auto-style2"><?php echo $amoountof;?></td>
<td class="auto-style2"><?php echo $service;?></td>	
<td class="auto-style2"><?php echo $date;?></</td>	
				
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($conn);
?>