<?php
$cid = $_POST['cid'];
$service=$_POST['service_type'];
require_once("see.php");
$cid=$_POST['search'];
$service=$_POST['service_type'];
if($service=='electricbill')
{
mysql_connect('localhost','root','');
mysql_select_db('electric')or die(mysql_error());
}
if($service=='telephonebill')
{
mysql_connect('localhost','root','');
mysql_select_db('telecome')or die(mysql_error());
}
if($service=='waterbill')
{
mysql_connect('localhost','root','');
mysql_select_db('dbwater')or die(mysql_error());
}

$sql=mysql_query("select *  from customer where CID ='$cid'");
if(mysql_num_rows($sql) < 1) {
            echo " ";
			echo "<script>alert('customer not found ,please enter Customer ID correctly!.');window.location.href='billsearch.php';</script>";
		   exit();
        }


while($row = mysql_fetch_array($sql))
  {

{
 echo "<script>alert(' Successfully !!');</script>";
}
?>
