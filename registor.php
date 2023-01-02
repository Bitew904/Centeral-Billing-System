<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Arba minch Town Centralized Billing System</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <style type="text/css">
  .auto-style3 {
	  text-align: left;
  }
  .auto-style4 {
	  text-align: left;
	  margin-left: 48px;
  }
  .auto-style5 {
	  text-align: left;
	  margin-left: 53px;
  }
  .auto-style6 {
	text-align: right;
	font-weight: bold;
}
  .auto-style7 {
	  text-align: center;
	  margin-left: 659px;
  }
  .auto-style8 {
	  margin-left: 233px;
  }
  .auto-style9 {
	  margin-left: 2px;
  }
  .auto-style10 {
	  text-align: left;
	  margin-left: 0px;
  }
  </style>
</head>
<body>
  <div id="main">
    <div id="header" style="width: 1197px; height: 109px;">
	<div id="logo" style="width: 269px; height: 99px;">
	
		<img alt="LOGO" height="104" src="BILL.png" width="217" class="auto-style10" /></div>
	<div id="title" style="left: -659px; top: 1px; height: 120px; width: 1057px;">
		<h1><strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2>&#4840;&#4768;&#4653;&#4707; &#4637;&#4757;&#4909; &#4776;&#4720;&#4635; &#4635;&#4821;&#4776;&#4619;&#4810; &#4848;&#4648;&#4656;&#4765; &#4768;&#4872;&#4621;&#4877;&#4622;&#4725;</h2>
    </div>
</div>

<div id="menubar">
   <ul id="menu">
  <li><a href="admin.php"><font color="white">Home</font></a></li>
		  
		</ul>
    </div><!--close menubar-->	
    
  <div id="site_content">		
     <div class="sidebar" style="width: 167px">
	 <table class="auto-style12">
	 
		<tr><td class="auto-style13">
			<img width="215" height="260" src="Img/8.jpg" class="auto-style11"/></td></tr>
		<tr><td class="auto-style14"><img width="215" height="270" src="Img/bll.jpg"/></td></tr>
		</table>
	 </div>
	  <div class="auto-style8" style="width: 683px">       
		<font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
	  <!--close sidebar_container-->	
	
	 <form  method='POST' action='register.php' onsubmit='returnn formValidation()' enctype="multipart/form-data" style="width: 493px">
        
		  <h1 style="width: 593px"><b>REGISTORE EMPLOYEE:  </h1>	  
 	<table style="width: 372px; height: 379px; background-color: #FFFFFF;" class="auto-style9">
	 <tr><td class="auto-style3" style="height: 41px;">Emloyee ID:</td>
		 <td class="auto-style3" style="height: 41px"> <input type="text" name="CID" required pattern="\d{2,10}"></td></tr>	
     <tr><td class="auto-style3" style="height: 36px;">First Name:</td>
		 <td class="auto-style3" style="height: 36px"> <input type="text" name="fname" required pattern="\D{2,10}"></td></tr>
	 <tr><td class="auto-style3" style="height: 7px;">last Name:</td>
		 <td class="auto-style3" style="height: 7px"> <input type="text" name="lname" required pattern="\D{2,10}"></td></tr>
	 <tr><td class="auto-style3" style="height: 37px;">address:</td>
		 <td class="auto-style3" style="height: 37px"> 
		 <input type="text" name="address" size="20" required pattern="\D{2,10}"></td></tr>
	 <tr><td class="auto-style3" style="height: 41px;">house no:</td>
		 <td class="auto-style3" style="height: 41px"> <input type="text" name="houseno" required pattern="\d{2,10}"></td></tr>
	 <tr><td class="auto-style3" style="height: 41px;">Phone number:</td>
		 <td class="auto-style3" style="height: 41px"> <input type="text" name="phone" required pattern="\d{10,15}"></td></tr>
	 <t
  <br><br>
  <tr>
	  <td class="auto-style6" style="width: 103px; height: 41px;"><strong>
	  <input type="submit" name="submit" value="save" class="auto-style6"></strong></td></tr>
  
  </table>
			 
 	
      </form>
	  
</div>
<div 
		
	  </div>
		  </div>
 </div>  
 <div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="login.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
	<!--close sidebar-->
</body>
</html>
