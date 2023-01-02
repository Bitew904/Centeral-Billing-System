<div id="content1">
        <div class="content_item">
		<center>
		<div style="width:820px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='viewbill.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/Student.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">CONGRATULATION FOR YOUR SUCCESS !</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="customer.php" title="Close"><img src="img/close_icon.gif"></a></div>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
 <?php
{
mysql_connect('localhost','root','');
mysql_select_db('bill')or die(mysql_error());
$query="select * from preparebill";
$run=mysql_query($query);
echo"<table border='1' width='700'>
<tr>
    <th>date</th>
	<th>fname</th>
	<th>lname</th>
	<th>address</th>
	<th>billNO</th>
	<th>currentreading</th>	
	<th>amountofbirr</th>
	<th>servicetype</th>
	
	
	</tr>";
while($row=mysql_fetch_array($run)){
					echo '<td><div align="left">'.$row['0'].'</div></td>';
                    echo '<td><div align="left">'.$row['1'].'</div></td>';
					
                  echo '<td><div align="left">'.$row[2].'</td>';
					echo '<td><div align="left">'.$row[3].'</td>';
					 echo '<td><div align="left">'.$row[4].'</td>';
					echo '<td><div align="left">'.$row[5].'</td>';
					 echo '<td><div align="left">'.$row[6].'</td>';
					 echo '<td><div align="left">'.$row[7].'</td>';
					// echo '<td><div align="left">'.$row[8].'</td>';					 					
					 echo '</tr>';					
	}
	}
?>
