<?php
$secretcode=$_POST['secretcode'];
//dbsecretcode;

require_once("see.php");
mysql_connect('localhost','root','');
mysql_select_db('bill')or die(mysql_error());
$result=mysql_query($sql);
$disp=mysql_query("select *  from transfer where secretcode ='secretcode'")or  die(mysql_error());
while($row=mysql_fetch_array($sql))
{
	?>
<table border ="6" bgcolor="green">
<tr>
<td><?php echo'first_name';?>
<td><?php echo 'last_name';?>
<td><?php echo'branch';?>
<td><?php echo'secretcode';?>
<td><?php echo'amountofbirr';?>
<td><?php echo'phoneNo';?>
<td><?php echo'date';?>
<td><?php echo'service_type';?>
</td></tr>
<?php
}
if($secretcode==dbsecretcode)
{ 
?>  
<tr>
<td><?php echo $row['fname'];?>
<td><?php echo $row['lname'];?>
<td><?php echo $row['branch'];?>
<td><?php echo $row['secretcode'];?>
<td><?php echo $row['amountofbirr'];?>
<td><?php echo $row['phoneno'];?>
<td><?php echo $row['date'];?>
<td><?php echo $row['service_type'];?>
 </td>

</tr>
</table
<?php
} 
mysql_close();    
?>

$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("customer1", $p);
$SecretcodeNO=$_POST['SecretcodeNO'];
$result = mysql_query("SELECT * FROM transfer where SecretcodeNO='$SecretcodeNO'");
echo "<table border='1'
<tr>
<th>SenderFname</th>
<th>SenderLname</th>
<th>SenderBranch</th>
<th>Amountofbirr</th>
<th>SecretcodeNo</th>
<th>SenderphoneNO</th>
<th>Servicetype</th>
</tr>";

while($row = mysql_fetch_array($result))
 
{
echo "<tr>";
echo "<td>" . $row['SenderFname'] . "</td>";
echo "<td>" . $row['SenderLname'] . "</td>";
echo "<td>" . $row['SenderBranch'] . "</td>";
echo "<td>" . $row['Amountofbirr'] . "</td>";
echo "<td>" . $row['SecretcodeNo'] . "</td>";
echo "<td>" . $row['SenderphoneNO'] . "</td>";
echo "<td>" . $row['Servicetype'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($p);
?>
