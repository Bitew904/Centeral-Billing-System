<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Arbaminch Billing System</title>
  <link rel="icon" type="image/png" href="Img/BILL.png"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/slide.js"></script>
  
  <style type="text/css">
.auto-style1 {
	margin-right: 62px;
}
.auto-style2 {
	margin-right: 55px;
}
</style>
  
</head>
<body>
  <div id="main">
 <div id="header" style="width: 1197px; height: 149px;">
	<div id="title" style="left: -807px; top: 2px;width: 1197px; height: 159px;">
		<h1 style="height: 24px" class="auto-style1">&nbsp;</h1>
		<h1 style="height: 56px" class="auto-style1">&nbsp;<strong>ARBAMINCH TOWN CENTRALIZED SYSTEM</strong></h1>
		<h2><strong>የአርባ ምንጭ ከተማ ማዕከላዊ ደረሰኝ አገልግሎት</strong></h2>
    </div>
</div>
<div id="menubar">
   <ul id="menu">
  <li><a href="home.php"><font color="white">Home</font></a></li>
		  <li><a href="cntct.php"><font color="white">Contact Us</font></a></li>
		   <li><a href="about.php"><font color="white">About Us</font></a></li>
		   <li><a href="signup.php"><font color="white">sign up</font></a></li>
        <li><a href="login.php"><font color="white">Login</font></a></li>
		</ul>
    </div><!--close menubar-->	
    
  <div id="site_content">
       <div class="sidebar_item">
	   <body bgcolor=#9494B8>
<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
 <?php
echo "<b>".date('1\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr></body>
          
		   </div>

      
      
  
	 
	  <div id="content2" style="width: 1010px" class="auto-style2">
	   
<?php
$folder_path = 'images/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
	while(false !== ($file = readdir($folder))) 
	{
		$file_path = $folder_path.$file;
		$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
		if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
		{
			?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
            <?php
		}
	}
}
else
{
	echo "the folder was empty !";
}
closedir($folder);
?>	   

       <div class="gallery">
	             <a target="_blank" href="img/member/c1.jpg">
				 <img class="mySlides" src="img/member/c1.jpg" alt="Cheru" width="300" height="200">
	           </a>
               <a target="_blank" href="img/member/c2.jpg">
                <img class="mySlides" src="img/member/c2.jpg" alt="Cheru" width="300" height="200">
            </a>
            <div class="desc">Cheru dejenie</div>
       <a target="_blank" href="img/member/b1.jpg">
       <img class="mySlides" src="img/member/b1.jpg" alt="geni" width="300" height="200"></a></div>

       <div class="gallery">
       <a target="_blank" href="img/member/g1.jpg">
	   <img class="mySlides" src="img/member/g1.jpg" alt="geni" width="300" height="200">
	    </a>
	   <a target="_blank" href="img/member/g2.jpg">
	   <img class="mySlides" src="img/member/g2.jpg" alt="geni" width="300" height="200">
	   <a target="_blank" href="img/member/g3.jpg">
	  <img class="mySlides" src="img/member/g3.jpg" alt="geni" width="300" height="200">
       </a>
        <div class="desc">Name: Genet G/mechial</div>
      </div>
             <div class="gallery">
          <a target="_blank" href="img/member/.jpg">
                <img src="mountains.jpg" alt="Salim" width="300" height="200">
            </a>
            <div class="desc">Salim A/kadir</div>
		 </div>
           

   
        </div>
		 <div id="tt" class="auto-style1" style="top: 196px; left: 309px; height: 1489px; width: 190px">
		 <div class="gallery">
       <a target="_blank" href="img/member/b1.jpg">
       &nbsp;</a><a target="_blank" href="img/member/b2.jpg"><img class="mySlides" src="img/member/b2.jpg" alt="geni" width="300" height="200">
	  </a>
	  <a target="_blank" href="img/member/b3.jpg">
	  <img class="mySlides" src="img/member/b3.jpg" alt="geni" width="300" height="200">
         </a>
      <div class="desc">Name: Bitew abebayehu</div>
       </div>
		 <div class="gallery">
          <a target="_blank" href="img/member/.jpg".jpg">
                <img src="mountains.jpg" alt="Abduri" width="300" height="200">
            </a>
            <div class="desc">Abdurahman Alias</div>
		 </div>
		  <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
	
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
	   
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
		  </div>
		  </div>
	  <ul class="style10" id="menu">
       
        <li class="style9 style14 style13"></li>
 </ul>
 </div>  
 <div id="footer">
    <p><strong>Arba Minch Town Centralized Billing System | Design By:<a href="login.php"><font color="white">  G4COMP</a></strong></p>
   </div>
</div>
	<!--close sidebar-->
</body>
</html>
