<?php	
$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);
	$secretcode=$_POST['secretcode'];
	//$un=$_POST['un'];
$sql = mysql_query("SELECT * FROM payment where secretcode='$secretcode'");
 $secretcode = mysql_num_rows($sql);
   if($secretcode==0 && $secretcode!=""){
  echo "The account does not exist"; 
  }
echo "<table border='1'>
<tr>
<th>date</th>
<th>secretcode</th>
<th>amountofbirr</th>
<th>service_type</th>
</tr>";

while($row = mysql_fetch_array($sql))
{
echo "<tr>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['secretcode'] . "</td>";
echo "<td>" . $row['amountofbirr'] . "</td>";
echo "<td>" . $row['service_type'] . "</td>";
echo "</tr>";
}
echo "</table>";
	
mysql_close($p);

	


		
	
?>