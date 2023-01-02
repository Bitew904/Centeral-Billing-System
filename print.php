
<html><head>
<link rel="icon" type="image/ico" href="Img/BILL.png"/>
</head>
<body style="width: 282px; height: 497px">
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=600, height=500, left=50, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 600px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:134px;
margin:0 auto;
}
.auto-style1 {
	text-align: left;
}
.auto-style2 {
	text-align: right;
}
.auto-style3 {
	font-weight: bold;
	text-align: right;
}
</style>
<a href="javascript:Clickheretoprint()">Print</a>
<a href="logout.php">logout</a>
<a href="employee.php">back</a>
<div id="print_content" style="height: 478px">
<img width="499" height="80"src="Img/am.JPG"/>

<?php
include("see.php");


?>

<table style="border:1px solid black; border-radius:10px;margin-top:0px;box-shadow:0px 0px 0px black; width: 482px;" height="450px">
<?php
$result = mysql_query("SELECT * FROM payment ");
$num = mysql_num_rows($result);
for($i=0;$i<$num;$i++)
   {
	    $date= mysql_result($result,$i,'date');
		$billNO= mysql_result($result,$i,'billNO');
		$amountofbirr= mysql_result($result,$i,'amountofbirr');
		$servicetype= mysql_result($result,$i,'servicetype');
		 $fname= mysql_result($result,$i,'fname');
		  $lname= mysql_result($result,$i,'lname');
		  $mounth= mysql_result($result,$i,'mounth');
   }

   mysql_close($conn);
?>

<tr><td style="width: 132px" class="auto-style2"><b><font color ="green">CustomerName:</font></td> 
<td style="width: 367px">
<input type="text" value="<?php echo $fname; ?>&nbsp;&nbsp;<?php echo $lname; ?>" name="name" style="width: 113px"></td> 
</tr><tr>
<td style="width: 132px; height: 37px;" class="auto-style2"><b>pament for mounth:<br></td>
<td style="width: 367px; height: 37px;" class="auto-style1">
<input type="text" value="<?php echo $mounth; ?>" style="width: 72px"></input></td><td style="width: 132px; height: 40px;" class="auto-style2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date:<br></b></td>
<td style="width: 466px; height: 40px;">  
<input type="text" value="<?php echo $date; ?>" name="date" style="width: 73px"></td>
</tr>
<tr>
<td style="width: 132px" class="auto-style3">&nbsp;&nbsp;&nbsp;&nbsp; bill Number:<br></td>
<td style="width: 367px" class="auto-style1">
<input type="text" value="<?php echo $billNO; ?>" name="bill" style="width: 69px"></td>
<td style="width: 132px" class="auto-style2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amountofbirr:<br></b></td>
<td style="width: 466px">
<input type="text" value="<?php echo $amountofbirr; ?>" name="aofb" style="width: 77px"></td>

</tr>

<tr>
<td style="width: 132px" class="auto-style2"><b>&nbsp;&nbsp;&nbsp;&nbsp;service type:<br></b></td>
<td style="width: 367px">
<input type="text" value="<?php echo $servicetype; ?>" name="service" style="width: 82px"></td>
</tr>


<tr><td style="width: 132px" class="auto-style2"><b><font color ="green">&nbsp;&nbsp;&nbsp; Prepared by:</font></td>
	<td style="width: 367px">____________</td>
</tr></td>  
<tr><td style="width: 132px" class="auto-style2">   <font color ="green">&nbsp;&nbsp;&nbsp; <b> &nbsp;&nbsp;&nbsp;&nbsp; Signature:</font><td style="width: 367px">____________</td>
</td></tr>
</table>
</center>


</div>

</body>
</html>