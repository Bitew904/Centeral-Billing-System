<?php
include("see.php");
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from useraccount where username='$status'");
	while($row=mysql_fetch_object($select_status))
	{
		$st=$row->Status;
	
	if($st=='0')
	{
		$status2=1;
		$update=mysql_query("update useraccount set Status='$status2' where UserName='$status' ");
	}
	else if($st=='1'){
	
	$status2=0;
	$update=mysql_query("update useraccount set Status='$status2' where UserName='$status' ");
	}
	
	//else
	//{
	//	$status2=0;
	//}
	//$update=mysql_query("update user set status='$status2' where email='$status' ");
	if($update)
	{
		header("Location:manageacc.php");
	}
	else
	{
		echo mysql_error();
	}
	}
     
}
?>