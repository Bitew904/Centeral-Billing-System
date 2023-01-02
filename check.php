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
<td><?php echo $row['first_name'];?>
<td><?php echo $row['last_name'];?>
<td><?php echo $row['secretcode'];?>
<td><?php echo $row['branch'];?>
<td><?php echo $row['amountofbirr'];?>
<td><?php echo $row['phoneNo'];?>
<td><?php echo $row['date'];?>
<td><?php echo $row['service_type'];?>
 </td>

</tr>
</table
<?php
} 
mysql_close();    
?>
}
