
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title> Arbaminch town centralized system</title>
  <link rel="icon" type="image/png" href="Img/dbui.png"/>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
  <style type="text/css">
.auto-style1 {
	border-width: 0px;
}
.auto-style2 {
	border-style: solid;
	border-width: 1px;
}
.auto-style3 {
	border-left-style: none;
	border-left-width: medium;
	border-right-style: solid;
	border-right-width: 1px;
	border-top-style: solid;
	border-top-width: 1px;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}
.auto-style5 {
	border-left-style: none;
	border-left-width: medium;
	border-right-style: solid;
	border-right-width: 1px;
	border-top-style: solid;
	border-top-width: 1px;
	border-bottom-style: none;
	border-bottom-width: medium;
}
.auto-style6 {
	border-style: solid;
	border-width: 1px;
	font-size: larger;
}
.auto-style7 {
	color: #0000FF;
}
</style>
  </head>

<body>
  <div id="main" class="auto-style3">
 <div id="header" style="width: 1197px; height: 149px;">
	<div id="title" style="left: -807px; top: 2px;width: 1197px; height: 159px;">
		<h1 style="height: 24px" class="auto-style1">&nbsp;</h1>
		<h1 style="height: 56px" class="auto-style1">&nbsp;<strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>የአርባ ምንጭ ከተማ ማዕከላዊ ደረሰኝ አገልግሎት</strong></h2>
    </div>
</div>
	<div id="menubar">
      <ul id="menu">
       <li><a href="admin.php"><font color="white">Home</font></a></li>
       
       <li><a href="logout.php"><font color="white">Logout</font></a></li>
		
		
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content" style="height: 654px">		

	  <div class="sidebar_container" style="width: 248px">       
		<div class="sidebar">
          <div class="sidebar_item" style="width: 242px; height: 667px">
<body bgcolor=#9494B8>
<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr class="auto-style2"><hr>
</body>
            
			 <img width="215" src="Img/contact us.jpg"/>
			   &nbsp; &nbsp;&nbsp;	<font size="3"color="green"><b>Related Links</b></font>
		
			<table bgcolor="#4b474" width="200"align ="center" id="table2">
			<tr><td></td><td><a href="http://www.facebook.com"><img width="200" height="50"src="Img/fb.jpg"></a></td>
			
			<tr><td></td><td><a href="http://www.google.com"><img width="200" height="50"src="Img/google-map.png"></a></td>
		</tr>
			
			<tr><td></td><td><a href="http://wwww.youtube.com"><img width="200" height="50"src="Img/youtube.png"></a></td>
			</table>
		
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        
      </div>
	  <!--close sidebar_container-->	
	
	 	  <div id="content1" style="height: 748px">
        <div class="content_item" style="height: 826px; width: 797px"> 
		  
<form  method='POST' action='cntct1.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
			
					<table cellpadding="4" cellspacing="8"  align ="center" style="width: 890px" class="auto-style1" >
					
							<tr>
						
							<th id="table1" class="auto-style2"> Name </th>
							<th class="auto-style2"> address </th>
							<th class="auto-style2" > email</th>
							<th class="auto-style2" > comment</th>
							<th class="auto-style2" > date</th>
							</tr>
						
<?php
include("see.php");
?>					
						<?php

$result = mysql_query("SELECT * FROM contact");
while($row = mysql_fetch_array($result))
  { 
						
   $name=$row['name'];								
   $email=$row['email'];
   $address= $row['address'];
   $date= $row['date'];
   $comment=$row['comment'];
?> 

<tr id="table1">
<td id="table1" class="auto-style2"><?php echo $name;?></td>
<td class="auto-style2"><?php echo $name;?></td>
<td class="auto-style2"><?php echo $email;?></td>
<td class="auto-style2"><?php echo $comment;?></td>	
<td class="auto-style6">
 <a href="reply.php"><span class="auto-style7">Replies </span> </a>
                        
						</td>	
				
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($conn);
?>
  </form>

      </div>
< </div>
 </div>  
 <div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="developer.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
 </div>
</body>
</html>
