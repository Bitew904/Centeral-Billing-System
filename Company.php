<html>
<head>
<link href="good.css" rel="stylesheet" type="text/css"/>
</head>
<body id="contianer">
<div id="bod">
<div>
<?php
include "yheader.php";
?>
</div>                    
<div id="left">
<?php
include "yleft.php";
?>
</div>	
<div id ="p">	
<p><strong>Welcome to  to Arba Minch University online credentials<br> verification system every company <br>who wants to employe our <br>graduates can verify their credenttials 
<br>by registering the Campany And <a href="employeform.php">Employe</a></strong><p></div>
<div id="rf">
<h2>Company Registration Form:</h2>
<form action="" method="post">
<table cellspacing="20" cellpadding="10"><tr><td>
Company Name:</td><td><input type="password" name="cname" id="span9001" placeholder="Campany Name" size="30" required="required"></td></tr>
<tr><td>Company Email:</td><td><input type="password" name="cemail" id="span9001" placeholder="Campany Email" size="30" required="required"></td></tr>
<tr><td>Comany Phone:</td><td><input type="password" name="cphone" id="span9001" placeholder="Camany Phone" size="30" required="required"></td></tr>
<tr><td>Company Country:</td><td><select name="ccountry" id="span9001">
<option>--select one--</option>
<option>Ethiopia</option>
<option>Kenya</option>
<option>Sudan</option>
<option>South Africa</option>
<option>America</option>
</select></td></tr>
<tr><td>Company City:</td><td><select name="ccity" id="span9001">
<option>--select one--</option>
<option>Arba Minch</option>
<option>Finfinne</option>
<option>Mekele</option>
<option>Bahirdar</option>
<option>Hawasa</option>
</select></td></tr>
<tr><td>Date:</td><td><input type="password" name="date" id="span9001" placeholder="Date" size="30" required="required"></td></tr>
<tr><td>Reason of Verification:</td><td><textarea name="rov" rows="5" cols="10"></textarea></td></tr></table>
<input type="submit" name="cemail" value="Submit">
</form>
</div>
<?php
include "yfoot.php";
?>
</div>
</body>
</html>