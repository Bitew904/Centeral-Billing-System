<?php
include("connection1.php");
include("connection.php");
?>
	<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
}
</style>

<div id="print_content">
<div align="center" style="margin-top:50px;"><strong>Population Registration Report</strong></a><br /> 
  <div style="margin-left:135%; width:50px;  text-align:center;"><a href="officerreport.php"><font color="black">back</font></a></div>
  
  
<table width="635" border="1" align="center" cellpadding="0" cellspacing="0" >
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th width="120"><div align="center">'User Id</div></th>
					<th width="115"><div align="center">First Name</div></th>
					<th width="136"><div align="center">Last Name</div></th>
					<th width="114"><div align="center">E-mail Address</div></th>
					<th width="108"><div align="center">Quantity</div></th>
					<th width="110"><div align="center">Ordered Date</div></th>
					<th width="113"><div align="center">Movie Title </div></th>
					<th width="113"><div align="center">Security Number</div></th>
            </tr>
          </thead>
          <tbody>
         <?php
			   					
								

  $ctrl = $row['User_Id'];
								 $result4 = mysql_query("SELECT * FROM order1 where User_Id='$ctrl'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  {
									
									
									echo '<td><div align="center">'.$rows['User_Id'].'</div></td>';
									echo '<td><div align="center">'.$row3['First_Name'].'</div></td>';
									echo '<td><div align="center">'.$row3['Last_Name'].' '.$row3['middleName'].'</div></td>';
									echo '<td><div align="center">'.$row3['eadress'].'</div></td>';
									echo '<td><div align="center">'.$row3['Quantity'].'</div></td>';
									echo '<td><div align="center">'.$row3['Order_Date'].'</div></td>';
									echo '<td><div align="center">'.$row3['Movie_Title'].'</div></td>';
									echo '<td><div align="center">'.$row3['Security_No'].'</div></td>';

								 echo '</tr>';
							
								  }
			  
			  ?>
			   
							          </div></td>
			</tr>
          </tbody>
	
</table>
</div>
 <div style="margin-left:90%; width:50px;  text-align:center;">  <a href="javascript:Clickheretoprint()">Print</a></div>	

			
		
		